<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MuridController;


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

Route::get('/murid', [MuridController::class, 'index']); 
Route::get('/murid/create', [MuridController::class, 'create']);
Route::post('/murid/store', [MuridController::class, 'store']);
Route::get('/murid/{id}/edit', [MuridController::class, 'edit']);
Route::put('/murid/{id}/', [MuridController::class,'update']);
Route::delete('/murid/{id}/', [MuridController::class, 'destroy']);