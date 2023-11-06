<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/laravel',[HomeController::class, 'laravel']);
Route::get('siswa/input_siswa',[SiswaController::class, 'create'])->name('siswa.input');
Route::post('siswa/input_siswa',[SiswaController::class, 'store'])->name('siswa.store');