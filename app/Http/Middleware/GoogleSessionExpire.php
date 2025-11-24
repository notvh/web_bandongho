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

          $expireAt = Session::get('google_expires_at');


            if ($expireAt && now()->greaterThan($expireAt)) {

                Auth::logout();
                Session::forget('google_expires_at');

                return redirect()->route('login')
                    ->with('error', 'Phiên đăng nhập Google đã hết hạn.');
            }
        }

        return $next($request);
    }
}
