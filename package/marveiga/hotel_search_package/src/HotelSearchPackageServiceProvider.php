<?php

namespace marveiga\HotelSearchPackage;

use Illuminate\Support\ServiceProvider;

class HotelSearchPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'search');
    }

    public function register()
    {
    }
}
