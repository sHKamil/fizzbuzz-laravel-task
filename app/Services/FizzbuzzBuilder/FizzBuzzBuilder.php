<?php

namespace App\Services\FizzbuzzBuilder;

use App\Interfaces\FizzbuzzHandlerInterface;

class FizzBuzzBuilder {

    private array $handlers;

    public function add(FizzbuzzHandlerInterface $handler): Self 
    {
        $this->handlers[] = $handler;
        return $this;
    }

    public function produce(Int $number): String 
    {
        $buffer = "";
        foreach($this->handlers as $handler) {
            $buffer = $handler->handle($number, $buffer);
        }
        return $buffer;
    }
}

