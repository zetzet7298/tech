<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
   /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        // dd(Auth::user()->roles);
        // dd(checkPermission('feedback', Auth::user()->roles));
        if (!Auth::check() || !checkPermission($role, $request->method())) {
            // Nếu người dùng không có quyền truy cập, chuyển hướng hoặc hiển thị lỗi
            return redirect()->route('home');
        }

        return $next($request);
    }
}
