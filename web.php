<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NasabahController;

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
Route::get('/data',[NasabahController::class,'index'])->name('data')->middleware('auth');
Route::get('/tambah',[NasabahController::class,'tambah'])->name('tambah');
Route::post('/input',[NasabahController::class,'input'])->name('input');
Route::get('/ubah/{id}',[NasabahController::class,'ubah'])->name('ubah');
Route::post('/update/{id}',[NasabahController::class,'update'])->name('update');
Route::get('/hapus/{id}',[NasabahController::class,'hapus'])->name('hapus');

//login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/loginproses',[LoginController::class,'loginproses'])->name('loginproses');
Route::get('/daftar',[LoginController::class,'daftar'])->name('daftar');
Route::post('/daftarproses',[LoginController::class,'daftarproses'])->name('daftarproses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');