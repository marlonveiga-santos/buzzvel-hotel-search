<?php

namespace Marveiga\HotelSearchPackage\Services;

use Illuminate\Support\Facades\Http;

class Search
{
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
    private static function normalizer()
    {
        $data = self::fetch();
        $collection = [];
        foreach ($data as $key => $item) {
            if (count($item) === 5) {
                unset($item[1]);
                array_splice($item, 4);
                utf8_encode($item[0]);
            } elseif ($item[1] || $item[2] !== '') {
                $collection[] = $item;
            }
        }
        return $collection;
    }

    /* Calcula a distância entre duas coordenadas por meio da fórmula de Haversine */
    private static function distanceCalculator($oLatitude, $oLongitude, $dLatitude, $dLongitude)
    {
        $theta = ($oLongitude - $dLongitude);
        $delta = sin(deg2rad($oLatitude)) * sin(deg2rad($dLatitude)) + cos(deg2rad($oLatitude)) * cos(deg2rad($dLatitude)) * cos(deg2rad($theta));
        $delta = acos($delta);
        $delta = rad2deg($delta);
        $unitConversion = $delta * 60 * 1.1515;
        $result = floatval(($unitConversion * 1.609344));
        return $result;
    }

    /* Formata a saída dos dados conforme solicitado */
    private static function outputFormatter($input)
    {
        $input[1] = number_format($input[1], 3, '.', '.') . ' KM';
        $input[2] = $input[2] . ' EUR';
        $outputFormatted = implode(', ', $input);
        return $outputFormatted;
    }

    /* Organiza as localidades mais próximas por preço */
    private static function tenCheapest($collection)
    {
        $result = array_slice($collection, 0, 10);
        $resultFormatted = [];
        $price = array_column($result, 2);
        array_multisort($price, SORT_ASC, $result);
        foreach ($result as $item) {
            $resultFormatted[] = self::outputFormatter($item);
        }
        return $resultFormatted;
    }

    /* Organiza as localidades mais próximas por distância */
    private static function tenNearest($collection)
    {
        $result = array_slice($collection, 0, 10);
        $resultFormatted = [];
        foreach ($result as $item) {
            $resultFormatted[] = self::outputFormatter($item);
        }
        return $resultFormatted;
    }

    /* Função principal que retorna uma lista com os hotéis mais próximos. */
    public static function getNearbyHotels($lat, $lon, $order)
    {
        $collection = [];
        $data = self::normalizer();
        foreach ($data as $item) {
            $distance = self::distanceCalculator($lat, $lon, $item[1], $item[2]);
            $collection[] = [$item[0], $distance, $item[3]];
        }
        $nearest = array_column($collection, 1);
        array_multisort($nearest, SORT_ASC, $collection);
        if (str_contains($order, 'pricepernight')) {
            return self::tenCheapest($collection);
        } else {
            return self::tenNearest($collection);
        }
    }
}
