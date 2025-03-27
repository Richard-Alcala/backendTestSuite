<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestSuitesController;
use App\Http\Controllers\TestCasesController;
use App\Http\Controllers\AuthController;


// Routes that require a Bearer Token.
Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('testsuites', TestSuitesController::class);
    Route::resource('testsuites.testcases', TestCasesController::class)->shallow();
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Public routes.
Route::post('/login', [AuthController::class, 'login']);
