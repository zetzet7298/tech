<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Channels\ZaloOAChannel;
use App\Channels\ZaloZNSChannel;
use App\Services\ZaloOAService;
use App\Services\ZaloZNSService;

class NotificationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->when(ZaloOAChannel::class)
            ->needs(ZaloOAService::class)
            ->give(function () {
                return new ZaloOAService();
            });

        $this->app->when(ZaloZNSChannel::class)
            ->needs(ZaloZNSService::class)
            ->give(function () {
                return new ZaloZNSService();
            });
    }
}
