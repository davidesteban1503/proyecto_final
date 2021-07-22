<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexControllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QualityController;
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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*landing*/
Route::get('index',[IndexControllers::class,'index']);
Route::get('about',[AboutController::class,'index']);
Route::get('contact',[ContactController::class,'index']);
Route::get('product',[ProductController::class,'index']);

/*quiality*/
Route::get('qualities',[QualityController::class,'index']);
Route::get('qualities/create',[QualityController::class,'create']);
Route::post('qualities',[QualityController::class,'store']);
Route::get('qualities/edit/{id}',[QualityController::class,'edit']);
Route::put('qualities/{id}',[QualityController::class,'update']);
Route::delete('qualities/{id}',[QualityController::class,'destroy']);