<?php

namespace App\Services\FizzbuzzBuilder;

use App\Interfaces\FizzbuzzHandlerInterface;

class FizzbuzzFizzHandler implements FizzbuzzHandlerInterface 
{
    public function handle(Int $number, String $buffer) : String
    {
        if($number !== 0 && $number % 3 === 0) {
            return $buffer . 'Fizz';
        }
        return $buffer;
    }
}
