<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;

trait Cachable
{
    protected static function bootCacheable($key)
    {
        static::saved(function ($model) use ($key) {
            self::clearCache($key);
        });

        static::deleted(function ($model) use ($key) {
            self::clearCache($key);
        });
    }

    protected static function clearCache($key)
    {
        if ($key == 'all') {
            Cache::flush(); // Delete all cache entries
        } else {
            Cache::forget('response|' . $key); // Delete specific cache entry
            // self::recacheUrl($key);
        }
    }

    protected static function recacheUrl($key, $cacheMinutes = 60)
    {
        try {
            $url = route($key);
            $client = new Client();
            $response = $client->request('GET', $url);
            $htmlContent = $response->getBody()->getContents();

            // Store the updated content in the cache
            $cacheKey = 'response|' . $key;
            Cache::put($cacheKey, $htmlContent, 60); // 60 minutes

            return true; // Successfully recached the URL
        } catch (\Exception $e) {
            dd($e);
            // Handle exception (e.g., log or return false)
            return false;
        }
    }
}
