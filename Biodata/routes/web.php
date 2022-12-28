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

Route::controller(App\Http\Controllers\SiswaController::class)->group(function () {


    Route::get('/siswas/{id_siswa}/detail', 'addEditDetail');
    Route::post('/siswas/{id_siswa}/updatedetail', 'storeOrUpdateDetail');
    Route::get('/siswas', 'index');
    Route::get('/siswas/create', 'create');
    Route::post('/siswas', 'store');
    Route::get('/siswas/{siswa}/edit', 'edit');
    Route::put('/siswas/{siswa}', 'update');
    Route::delete('/siswas/{siswa}', 'destroy');
});