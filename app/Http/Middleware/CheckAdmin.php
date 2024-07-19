<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || Auth::id() != 1) {
            // Nếu người dùng không có quyền truy cập, chuyển hướng hoặc hiển thị lỗi
            return redirect()->route('home');
        }

        return $next($request);
    }
}
