<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Func\Support\View\TitleContainer;

class TitleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('title',function(){
            return new TitleContainer();
        });
    }
}
