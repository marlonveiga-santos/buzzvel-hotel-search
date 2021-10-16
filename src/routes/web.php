<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Marveiga\HotelSearchPackage\Http\Controllers'], function () {
    Route::get('search', 'SearchController@search')->name('search');
    Route::post('search', 'SearchController@result');
});
