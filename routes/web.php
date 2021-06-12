<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NurmanController;

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

Route::get('/index',[NurmanController::class, 'index']);
    Route::get('/index/tambah',[NurmanController::class,'tambah']);
    Route::get('/index/edit/{id}', [NurmanController::class, 'edit']);
    Route::post('/index/store',[NurmanController::class, 'store']);
    Route::get('/index/hapus/{id}',[NurmanController::class,'hapus']);
    Route::post('/index/update', [NurmanController::class, 'update']);
Route::get('/index/export', [NurmanController::class, 'export']);
