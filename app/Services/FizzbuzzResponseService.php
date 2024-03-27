<?php

namespace App\Services;
use App\Services\FizzbuzzService;

class FizzbuzzResponseService {

    public static function getResponse(Int | Null $number) : Array
    {
        $fizzBuzz = new FizzbuzzService;

        if($number !== null){
            return [$fizzBuzz->associateFizzBuzz($number)];
        }

        return self::defaultResponse($fizzBuzz);
    }

    public static function defaultResponse(FizzbuzzService $fizzBuzz) : Array
    {
        $response = [];
        for ($i=1; $i <= 100; $i++) { 
            $response[$i] = $fizzBuzz->associateFizzBuzz($i);
        }

        return $response;
    }
}
