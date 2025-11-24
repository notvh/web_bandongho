<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
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
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'password' => Hash::make(uniqid()),
                    'img' => $googleUser->getAvatar() ?? 'default-avatar.jpg',
                    'phone' => null,
                    'role'=>'users',
                ]
            
     
            $originalLifetime = Config::get('session.lifetime');

            Config::set('session.lifetime',60 );

            Auth::login($user, false);  
            Config::set('session.lifetime', $originalLifetime);

            return true;
        } catch (Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            throw $e;
        }
    }
}
