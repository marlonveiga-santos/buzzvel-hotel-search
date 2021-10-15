<?php

namespace Marveiga\HotelSearchPackage\Services;

use Illuminate\Support\Facades\Http;

class Search {
    /* Endereço de acesso à API. */
    private const BASE_URL = "https://buzzvel-interviews.s3.eu-west-1.amazonaws.com/hotels.json";

    /* Efetua o acesso à api e retorna a sua coleção de dados */
    private static function fetch()
    {
        $response = Http::get(self::BASE_URL);
        $data = json_decode($response, true);
        return $data['message']; // Posição do objeto que possui os dados - message
    }

    /* Corrige inconsistências no objeto recebido, como dados nulos e campos não utilizados. */
    public static function normalizer()
    {
        $data = self::fetch();
        $collection = [];
        foreach ($data as $key => $item) {
            if (count($item) === 5) {
                unset($item[1]);
                array_splice($item, 4);
                utf8_encode($item[0]);
            }
            elseif ($item[1] || $item[2] !== '') {
                $collection[] = $item;
            }
        }
        return json_encode($collection);
    }
}
