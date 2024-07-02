<?php

namespace App\Http\Middleware;

use Cache;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = 'response|' . $request->fullUrl();
        if (Cache::has($key)) {
            return response(Cache::get($key));
        }

        $response = $next($request);

        Cache::put($key, $response->getContent(), 60); // 60 minutes

        return $response;
    }
}
