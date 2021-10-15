<?php

use Illuminate\Support\Facades\Route;
use Marveiga\HotelSearchPackage\Http\Controllers\SearchController;


Route::group(['namespace' => 'Marveiga\HotelSearchPackage\Http\Controllers'], function () {
    Route::get('search', 'SearchController@search')->name('search');
    Route::post('search', 'SearchController@result');
});

