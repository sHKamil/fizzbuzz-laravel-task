<?php

namespace App\Services;

use App\Services\FizzbuzzBuilder\FizzBuzzBuilder;
use App\Services\FizzbuzzBuilder\FizzbuzzBuzzHandler;
use App\Services\FizzbuzzBuilder\FizzbuzzEmptyHandler;
use App\Services\FizzbuzzBuilder\FizzbuzzFizzHandler;

class FizzbuzzResponseService {

    public static function getResponse(Int | Null $number) : Array
    {
        $fizzBuzzBuilder = new FizzBuzzBuilder;
        $fizzBuzzBuilder
                        ->add(new FizzbuzzFizzHandler())
                        ->add(new FizzbuzzBuzzHandler())
                        ->add(new FizzbuzzEmptyHandler());

        if($number !== null){
            return [$fizzBuzzBuilder->produce($number)];
        }

        return self::defaultResponse($fizzBuzzBuilder);
    }

    public static function defaultResponse(FizzBuzzBuilder $fizzBuzzBuilder) : Array
    {
        $response = [];
        for ($i=1; $i <= 100; $i++) { 
            $response[$i] = $fizzBuzzBuilder->produce($i);
        }

        return $response;
    }
}
