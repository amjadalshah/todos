<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']) -> name('home');

Route::get('/{id}',[HomeController::class,'show']);

Route::post('/create',[HomeController::class,'store']);

Route::get('/{id}/edit',[HomeController::class,'edit']);
Route::post('/{id}',[HomeController::class,'update']) ->name('update');

Route::get('/{id}/delete',[HomeController::class,'destroy']);
