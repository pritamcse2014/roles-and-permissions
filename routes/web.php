<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'Login']);

Route::post('/', [AuthController::class, 'LoginStore']);

Route::get('/logout', [AuthController::class, 'Logout']);

Route::group(['middleware' => 'userAdmin'], function () {
    Route::get('panel/dashboard', [DashboardController::class, 'panelDashboard']);

    Route::get('panel/user', [UserController::class, 'panelUserList']);

    Route::get('panel/role', [RoleController::class, 'panelRoleList']);

    Route::get('panel/role/add', [RoleController::class, 'panelRoleAdd']);

    Route::post('panel/role/add', [RoleController::class, 'panelRoleStore']);

    Route::get('panel/role/edit/{id}', [RoleController::class, 'panelRoleEdit']);

    Route::post('panel/role/edit/{id}', [RoleController::class, 'panelRoleUpdate']);

    Route::get('panel/role/delete/{id}', [RoleController::class, 'panelRoleDelete']);
});
