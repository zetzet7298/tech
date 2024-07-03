<?php

namespace App\Providers;

use App\Core\Adapters\Theme;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
                // $path = $request->path(); // Lấy đường dẫn của URL (path)
        // $segments = explode('/', $path); // Tách đường dẫn thành các phần dựa trên dấu '/'
        // $segment = end($segments); // Lấy phần tử cuối cùng của mảng
        // $visitorsFile = storage_path('app/visitors_by_ip.txt');
        // $visitorsData = json_decode(File::get($visitorsFile), true);
        // $totalViews = isset($visitorsData['total']) ? $visitorsData['total'] : 0;
        // view()->share(['totalViews'=>$totalViews += 45200, 'uri' => $segment, 'canonical' => 'https://hongnhanbinhhung.com']);
        
        $theme = theme();
        $settings = \App\Models\Setting::getByType(config('constants.SETTING_TYPE_COMMON'));
        $companyNameValue = $settings[config('constants.COMPANY_NAME')]['value'];
        $FACEBOOK = $settings[config('constants.FACEBOOK')]['value'];
        $ZALO = $settings[config('constants.ZALO')]['value'];
        $MESSENGER = $settings[config('constants.MESSENGER')]['value'];
        $DKKD = $settings[config('constants.DKKD')]['value'];
        $TIME_WORKING = $settings[config('constants.TIME_WORKING')]['value'];
        $EMAIL = $settings[config('constants.EMAIL')]['value'];
        $PHONE = $settings[config('constants.PHONE')]['value'];
        $ADDRESS = $settings[config('constants.ADDRESS')]['value'];
        $MISSION = $settings[config('constants.MISSION')]['value'];
        $LOGO = $settings[config('constants.LOGO')]['value'];
        $PRICE_QUOTE = $settings[config('constants.PRICE_QUOTE')]['value'];
        $GOOGLE_MAP = $settings[config('constants.GOOGLE_MAP')]['value'];
        // Share theme adapter class
        View::share('theme', $theme);
        View::share('companyNameValue', $companyNameValue);
        View::share('settings', $settings);
        View::share('FACEBOOK', $FACEBOOK);
        View::share('ZALO', $ZALO);
        View::share('DKKD', $DKKD);
        View::share('MESSENGER', $MESSENGER);
        View::share('TIME_WORKING', $TIME_WORKING);
        View::share('EMAIL', $EMAIL);
        View::share('PHONE', $PHONE);
        View::share('ADDRESS', $ADDRESS);
        View::share('MISSION', $MISSION);
        View::share('LOGO', $LOGO);
        View::share('PRICE_QUOTE', $PRICE_QUOTE);
        View::share('GOOGLE_MAP', $GOOGLE_MAP);

        // Set demo globally
        $theme->setDemo(request()->input('demo', 'demo1'));
        // $theme->setDemo('demo2');

        $theme->initConfig();

        bootstrap()->run();

        if (isRTL()) {
            // RTL html attributes
            Theme::addHtmlAttribute('html', 'dir', 'rtl');
            Theme::addHtmlAttribute('html', 'direction', 'rtl');
            Theme::addHtmlAttribute('html', 'style', 'direction:rtl;');
        }
    }
}
