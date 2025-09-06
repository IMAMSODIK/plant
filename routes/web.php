<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\MyGardenController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\PlantHistoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/developers', [DevelopersController::class, 'index']);

    Route::get('/my-garden', [MyGardenController::class, 'index']);
    Route::post('/my-garden/store', [MyGardenController::class, 'store']);
    Route::post('/my-garden/delete', [MyGardenController::class, 'delete']);
    Route::get('/my-garden/detail', [MyGardenController::class, 'detail']);

    Route::post('/plant/store', [PlantController::class, 'store']);
    Route::post('/plant/delete', [PlantController::class, 'delete']);
    Route::get('/plant/detail', [PlantController::class, 'detail']);

    Route::get('/plants-histories', [PlantHistoryController::class, 'index']);

    Route::get('/test', [DashboardController::class, 'test']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginCheck'])->name('login-check'); 

    Route::get('/sign-up', [AuthController::class, 'registrasi'])->name('registrasi');
    Route::post('/sign-up', [AuthController::class, 'registrasiCheck'])->name('registrasi-check'); 
});

Route::get('/', function () {
    return redirect('/dashboard');
});
