<?php

namespace App\Interfaces;

interface FizzbuzzHandlerInterface {
    public function handle(Int $number, String $buffer): String;
}
