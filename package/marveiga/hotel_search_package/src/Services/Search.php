<?php

namespace Marveiga\HotelSearchPackage\Services;

use Illuminate\Support\Facades\Http;

class Search {
    public static function fetch()
    {
        $response = Http::get('https://buzzvel-interviews.s3.eu-west-1.amazonaws.com/hotels.json');
        $data = json_decode($response, true);
        return $response;
    }
}
