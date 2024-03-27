<?php

namespace App\Services\FizzbuzzBuilder;

use App\Interfaces\FizzbuzzHandlerInterface;

class FizzbuzzEmptyHandler implements FizzbuzzHandlerInterface 
{
    public function handle(int $number, string $buffer): string 
    {
        if (empty($buffer)) {
            return (string) $number;
        }
        return $buffer;
    }
}
