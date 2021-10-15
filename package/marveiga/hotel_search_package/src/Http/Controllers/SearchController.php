<?php

namespace marveiga\HotelSearchPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public static function search(){
        return view('search::search');
    }

    public function result(Request $request){
        return $request->all();
    }
}
