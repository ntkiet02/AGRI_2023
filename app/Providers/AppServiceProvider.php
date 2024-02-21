<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Config;use Session;
use App\Http\Controllers\TinTucSuKienController;
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
        //
        $locale = app()->getLocale();
        $arr_lang = Config::get('app.arr_language');
        $tags = TinTucSuKienController::get_tags();
        view()->share('arr_lang', $arr_lang);
        view()->share('tags', $tags);
        Paginator::useBootstrap();
    }
}
