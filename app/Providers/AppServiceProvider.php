<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Satellite;
use App\Settings;
use App\Radar;
use App\City;
use App\News;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Settings::all();
        view()->share('settings', $settings);
    }
}
