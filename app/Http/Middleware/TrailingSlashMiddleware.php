<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrailingSlashMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->path();
        
        // Check if the path does not end with a slash and is not the root path
        if ($path !== '/' && substr($path, -1) !== '/') {
            
            return $next($request->url() . '/');
            // Redirect to the URL with a trailing slash
            return redirect($request->url() . '/');
        }
        
        return $next($request);
    }
}
