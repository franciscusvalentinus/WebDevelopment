<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/copyright/export', [\App\Http\Controllers\CopyrightController::class, 'export'])->name('copyright.export');
    Route::get('/patent/export', [\App\Http\Controllers\PatentController::class, 'export'])->name('patent.export');
    Route::get('/design/export', [\App\Http\Controllers\DesignController::class, 'export'])->name('design.export');
    Route::get('/brand/export', [\App\Http\Controllers\BrandController::class, 'export'])->name('brand.export');
    Route::resource('department', \App\Http\Controllers\DepartmentController::class);
    Route::resource('lecturer', \App\Http\Controllers\LecturerController::class);
    Route::resource('creation', \App\Http\Controllers\CreationController::class);
    Route::resource('copyright', \App\Http\Controllers\CopyrightController::class);
    Route::resource('patent', \App\Http\Controllers\PatentController::class);
    Route::resource('design', \App\Http\Controllers\DesignController::class);
    Route::resource('brand', \App\Http\Controllers\BrandController::class);
});
