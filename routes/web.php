<?php

use App\Http\Controllers\Admin\HomeAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutAdminController;


Route::get('/', function () {
    return view('welcome');
});
// user route
Route::get('/home', [HomeAdminController::class, 'Home']);
Route::get('/about', [AboutAdminController::class, 'About']);
Route::get('/update', [AboutAdminController::class, 'Update']);
Route::get('/insert', [AboutAdminController::class, 'Insert']);
