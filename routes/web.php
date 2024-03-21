<?php

use App\Http\Controllers\FizzbuzzController;
use Illuminate\Support\Facades\Route;

Route::get('/{number?}', [FizzbuzzController::class, 'index']);
