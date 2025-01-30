<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user', [\App\Http\Controllers\Api\UserController::class, 'user']);
    Route::get('timeline', [\App\Http\Controllers\Api\TimelineController::class, 'timeline']);
    Route::get('company', [\App\Http\Controllers\Api\CompanyController::class, 'company']);
    Route::get('report', [\App\Http\Controllers\Api\ReportController::class, 'report']);
});

Route::post('login', [\App\Http\Controllers\Api\LoginController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\Api\LoginController::class, 'logout']);
