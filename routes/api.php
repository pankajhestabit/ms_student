<?php

use App\Http\Controllers\Api\ApiLoginController;
use App\Http\Controllers\Api\ApiStudentController;
use App\Http\Controllers\Api\ApiTeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('login', [ApiLoginController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::apiResource('student', ApiStudentController::class);
});


