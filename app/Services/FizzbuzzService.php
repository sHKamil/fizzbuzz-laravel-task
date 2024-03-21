<?php

namespace App\Services;

class FizzbuzzService {

    public function associateFizzBuzz(int $number) : string
    {
        if($number === 0) return (string) $number;
        if($this->isFizz($number) && $this->isBuzz($number)) return 'FizzBuzz';
        if($this->isFizz($number)) return 'Fizz';
        if($this->isBuzz($number)) return 'Buzz';
        return (string) $number;
    }

    public function isFizz(int $number) : bool
    {
        if(($number % 3) === 0) return true;
        return false;
    }

    public function isBuzz(int $number) : bool
    {
        if(($number % 5) === 0) return true;
        return false;
    }
}
