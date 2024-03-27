<?php

namespace App\Validation;

use Illuminate\Support\Facades\Validator;

class FizzbuzzArgumentValidator
{
    public static function validate($argument): Bool
    {
        $validator = Validator::make(['argument' => $argument], [
            'argument' => 'nullable|numeric'
        ]);

        return $validator->passes();
    }
}
