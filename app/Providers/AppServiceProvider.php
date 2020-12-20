<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Settings;
use App\Content;

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
        $settings          = Settings::all();
        $contents          = Content::all();
        $features          = Content::where('type', 'feature')->get();
        $our_parteners     = Content::where('type', 'our_parteners')->get();
        $work_hows         = Content::where('type', 'work_how')->get();
        $happy_clients     = Content::where('type', 'happy_client')->get();
        $about_us_features = Content::where('type', 'about_us_features')->get();
        $pricing           = Content::where('type', 'pricing')->get();

        view()->share('settings', $settings);
        view()->share('contents', $contents);
        view()->share('features', $features);
        view()->share('our_parteners', $our_parteners);
        view()->share('work_hows', $work_hows);
        view()->share('happy_clients', $happy_clients);
        view()->share('about_us_features', $about_us_features);
        view()->share('pricing', $pricing);
    }
}
