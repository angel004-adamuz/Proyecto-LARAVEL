<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentroEducativoController;

Route::resource('centros', CentroEducativoController::class);