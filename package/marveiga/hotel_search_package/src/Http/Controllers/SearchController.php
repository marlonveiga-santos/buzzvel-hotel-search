<?php

namespace marveiga\HotelSearchPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Marveiga\HotelSearchPackage\Services\Search;

class SearchController extends Controller
{
    public static function search()
    {
        return view('search::search', ['fool' => 'ECHO !!!']);
    }

    /* Coleta as coordenadas inseridas por meio da web page. */
    private function getCoordinates($coordinates)
    {
        $coordinatesArray = explode(',', $coordinates);
        return $coordinatesArray;
    }

    public function result(Request $request)
    {
        $result = $request->all();
        $resultCoordinates = $this->getCoordinates($result['coordinates']);
        $resultCriteria = $result['search_criteria'];
        return view('search::response', ['zool' => Search::getNearbyHotels($resultCoordinates[0], $resultCoordinates[1], $resultCriteria)]);
    }
}
