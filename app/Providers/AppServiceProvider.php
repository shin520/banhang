<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Language;

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
        if(session('lang') == ''){
            session()->put('lang', 'vi');
        }
        $langs = Language::orderBy('id', 'desc')->get();
        view()->share('langs', $langs);
    }
}
