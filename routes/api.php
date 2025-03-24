<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestSuitesController;
use App\Http\Controllers\AuthController;

Route::middleware(['api'])->group(function () {
    Route::resource('testsuites', TestSuitesController::class);
});
