<?php

namespace App\Http\Controllers;

use App\Services\FizzbuzzResponseService;
use App\Validation\FizzbuzzArgumentValidator;
use Illuminate\Http\Request;

class FizzbuzzController extends Controller
{
    public function index($argument = null)
    {
        if (!FizzbuzzArgumentValidator::validate($argument)) {
            return response()->json(['error' => 'The argument must be numeric.']);
        }

        $response = FizzbuzzResponseService::getResponse($argument);
        return response()->json($response);
    }
}
