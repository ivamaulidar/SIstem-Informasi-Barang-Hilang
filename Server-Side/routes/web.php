<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KehilanganController;
use App\Http\Controllers\PenemuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaftarKehilanganController;
use App\Http\Controllers\DaftarPenemuanController;
use App\Http\Controllers\AdminController;

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
    return view('v_home');
});

// Route::get('/login1', function () {
//     return view('login1');
// });

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/admin_silabil', function () {
    return view('sb-admin/app');
});

Route::get('/form_kehilangan', function () {
    return view('v_form_hilang');
});

Route::get('/form_penemuan', function () {
    return view('v_form_ketemu');
});

// Route::get('/daftar_barang_hilang', function () {
//     return view('v_daftar_hilang');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('v_home')->middleware('auth');
Route::resource('kehilangan', KehilanganController::class)->middleware('admin');
Route::resource('penemuan', PenemuanController::class)->middleware('admin');
Route::resource('pengguna', UserController::class)->middleware('admin');
Route::resource('daftar_barang_hilang', DaftarKehilanganController::class)->except('show','edit','destroy','update');
Route::resource('daftar_barang_ketemu', DaftarPenemuanController::class)->except('show','edit','destroy','update');
Route::resource('admin', AdminController::class)->except('show','create','edit','destroy','update')->middleware('admin');


//Autorisasi ada pada penggunaan middleware dan gate untuk membedakan user login dan admin