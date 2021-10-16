<?php

namespace marveiga\HotelSearchPackage;

use Illuminate\Support\ServiceProvider;

class HotelSearchPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'search');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/hotel_search_package')
        ]);
    }

    public function register()
    {
    }
}
