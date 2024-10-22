<?php

namespace App\Providers;

use App\Services\SystemlogSerivceService;
use App\Services\SystemlogService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('systemlog', function ($app) {
            return new SystemlogService();
        });
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void {}
}