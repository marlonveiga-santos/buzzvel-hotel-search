<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('search', function(){
    return view('search::search');
})->name('search');

Route::post('search', function(Request $request){
    return $request->all();
});

