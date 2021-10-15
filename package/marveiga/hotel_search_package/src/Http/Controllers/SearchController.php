<?php

namespace marveiga\HotelSearchPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Marveiga\HotelSearchPackage\Services\Search;

class SearchController extends Controller
{
    public static function search(){
        return view('search::search', ['fool' => Search::getNearbyHotels('-34.591035804444125', '-58.42752456665039','pricepernight')]);
    }

    public function result(Request $request){
        return $request->all();
    }
}
