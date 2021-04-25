<?php

namespace App\Providers;

use App\Models\Site;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('sites')){
            $site = Site::getSite();
            if ($site){
                config()->set('site', $site);
            }
        }
    }
}
