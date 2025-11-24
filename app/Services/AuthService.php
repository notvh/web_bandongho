<?php

namespace App\Services;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Log;

class AuthService
{
    public function handleGoogleCallback(): bool
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'password' => Hash::make(uniqid()),
                    'img' => $googleUser->getAvatar() ?? 'default-avatar.jpg',
                    'phone' => null,
                    'role'=>'users',
                ]
            );

            Auth::login($user);
            return true;
        } catch (Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            throw $e;
        }
    }

}