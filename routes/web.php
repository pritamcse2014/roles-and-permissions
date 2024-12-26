<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'Login']);

Route::post('/', [AuthController::class, 'LoginStore']);

Route::get('/logout', [AuthController::class, 'Logout']);

Route::group(['middleware' => 'userAdmin'], function () {
    Route::get('panel/dashboard', [DashboardController::class, 'panelDashboard']);
});
