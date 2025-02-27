<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EspecialistaController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\IndexControllers;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VcitasController;
use App\Models\User;
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

/*usuarios*/
Route::get('usuarios',[UserController::class,'index']);
Route::get('usuarios/create',[UserController::class,'create']);
Route::post('usuarios',[UserController::class,'store']);
Route::get('usuarios/edit/{id}',[UserController::class,'edit']);
Route::put('usuarios/{id}',[UserController::class,'update']);
Route::delete('usuarios/{id}',[UserController::class,'destroy']);
    
/*Paciente*/
Route::get('pacientes',[PacienteController::class,'index']);
Route::get('pacientes/create',[PacienteController::class,'create']);
Route::post('pacientes',[PacienteController::class,'store']);

/*especialista*/
Route::get('especialista',[EspecialistaController::class,'index']);

/*citas*/
Route::get('citas',[CitasController::class,'index']);
Route::get('citas/create',[CitasController::class,'create']);
Route::post('citas',[CitasController::class,'store']); 
Route::get('citas/edit/{id}',[CitasController::class,'edit']);
Route::put('citas/{id}',[CitasController::class,'update']);
Route::delete('citas/{id}',[CitasController::class,'destroy']);

/*inventario */



