<?php

use Illuminate\Support\Facades\Route;

Route::get('search', function(){
    return view('search::search');
});
