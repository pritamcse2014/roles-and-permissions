<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'Login']);

Route::post('/', [AuthController::class, 'LoginStore']);
