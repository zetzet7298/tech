<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
class CountVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();
        $date = Carbon::now()->toDateString();
        $visitorsFile = storage_path('app/visitors_by_ip.txt');
        $visitorsData = json_decode(File::get($visitorsFile), true);
        
        // Kiểm tra nếu IP đã gửi yêu cầu trong ngày hiện tại
        if (!isset($visitorsData[$date][$ip])) {
            // Tăng tổng số lượt xem của tất cả IP
            $visitorsData['total'] = isset($visitorsData['total']) ? $visitorsData['total'] + 1 : 1;
            // Đánh dấu IP đã gửi yêu cầu trong ngày hiện tại
            $visitorsData[$date][$ip] = true;

            File::put($visitorsFile, json_encode($visitorsData));
        }

        return $next($request);
    }
}
