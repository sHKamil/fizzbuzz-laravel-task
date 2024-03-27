<?php

namespace App\Services\FizzbuzzBuilder;

use App\Interfaces\FizzbuzzHandlerInterface;

class FizzbuzzBuzzHandler implements FizzbuzzHandlerInterface 
{
    public function handle(Int $number, String $buffer): String 
    {
        if ($number !== 0 && $number % 5 === 0) {
            return $buffer . 'Buzz';
        }
        return $buffer;
    }
}
