<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PenggunaController;

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

Route::get('/pengguna',[PenggunaController::class,'index']);
Route::get('/article',[PenggunaController::class,'article']);
Route::get('/anggota',[PenggunaController::class,'anggota']);
Route::get('/transaksi',[PenggunaController::class,'transaksi']);