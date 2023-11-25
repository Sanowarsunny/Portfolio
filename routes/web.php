<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[homeController::class,'home'])->middleware('throttle:5,1');
Route::get('/pages/about',[homeController::class,'about']);
Route::get('/pages/resume',[homeController::class,'resume']);
Route::get('/pages/contact',[homeController::class,'contact']);
Route::get('/pages/portfolio',[homeController::class,'portfolio']);



