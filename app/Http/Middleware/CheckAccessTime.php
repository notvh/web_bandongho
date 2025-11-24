<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccessTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $now = Carbon::now();
        $start = Carbon::createFromTime(8,0);
        $end = Carbon::createFromTime(17, 0);
        if($now->lessThan($start) || $now->greaterThan($end)){
return response('Lỗi bạn không được vào vào giờ này', 403);
        }
        return $next($request);
    }
}
