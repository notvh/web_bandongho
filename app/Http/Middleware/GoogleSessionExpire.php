<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GoogleSessionExpire
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {

            $expireAt = session('google_expires_at');

            if ($expireAt && now()->greaterThan($expireAt)) {

                Auth::logout();
                Session::flush();

                return redirect()->route('login')
                    ->with('error', 'Phiên đăng nhập Google đã hết hạn.');
            }
        }

        return $next($request);
    }
}
