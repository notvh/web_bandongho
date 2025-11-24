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
            );

            // Lưu giá trị session lifetime gốc
            $originalLifetime = Config::get('session.lifetime');

            // Override session lifetime cho login Google: 20 giây = 0.33 phút
            Config::set('session.lifetime', 0.33);

            // Login user (session lưu vào DB, sống 20 giây)
            Auth::login($user, false);

            // Restore giá trị gốc để session khác không bị ảnh hưởng
            Config::set('session.lifetime', $originalLifetime);

            return true;
        } catch (Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            throw $e;
        }
    }
}
