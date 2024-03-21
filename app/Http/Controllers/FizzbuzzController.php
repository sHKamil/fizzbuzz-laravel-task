<?php

namespace App\Http\Controllers;

use App\Services\FizzbuzzService;
use Illuminate\Http\Request;

class FizzbuzzController extends Controller
{
    public function index($number = null)
    {
        $fizzBuzz = new FizzbuzzService;
        $response = [];
        if($number !== null && is_numeric($number)){
            $response = [$number => is_numeric($fizzBuzz->associateFizzBuzz($number)) ? '' : $fizzBuzz->associateFizzBuzz($number)];
        } else {
            for ($i=1; $i <= 100; $i++) { 
                array_push($response, [$i => is_numeric($fizzBuzz->associateFizzBuzz($i)) ? '' : $fizzBuzz->associateFizzBuzz($i)]);
            }
        }
        return response()->json($response);
    }
}
