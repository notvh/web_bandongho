<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Socialite;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    //
    // Bước 1: Chuyển người dùng sang Google
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Bước 2: Google trả về → xử lý đăng nhập/tạo user
    public function callbackGoogle()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // 1. Tìm user theo google_id trước (ưu tiên)
            $user = User::where('google_id', $googleUser->id)->first();

            // 2. Nếu không có thì tìm theo email (trường hợp cũ)
            if (!$user) {
                $user = User::where('email', $googleUser->email)->first();
            }

            // 3. Nếu tìm thấy user → cập nhật google_id + avatar
            if ($user) {
                $user->update([
                    'google_id' => $googleUser->id,
                    'avatar'    => $googleUser->avatar ?? $user->avatar,
                ]);
            }

            // 4. Nếu chưa có → tạo mới
            if (!$user) {
                $user = User::updateOrCreate([
                    'name'              => $googleUser->name ?? 'Khách Google',
                    'email'             => $googleUser->email,
                    'google_id'         => $googleUser->id,
                    'avatar'            => $googleUser->avatar,
                    'email_verified_at' => now(),
                    'password'          => Hash::make(Str::random(24)),
                ]);
            }

            // ĐĂNG NHẬP = SESSION
            Auth::login($user, true); // true = remember me

            // Quay lại trang trước đó (giỏ hàng, thanh toán...)
            return redirect()->route('home.index');
        } catch (Exception $e) {
            // Log lỗi nếu cần: Log::error($e);
            return redirect()->route('login')
                ->with('error', 'Đăng nhập Google thất bại! Vui lòng thử lại.');
        }
    }
}
