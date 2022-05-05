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


// Route::get('/', function () {
//     return view('v_home');
// });

Route::get('/login1', function () {
    return view('login1');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/admin', function () {
    return view('sb-admin/app');
});

Route::get('/dashboard-admin', function () {
    return view('admin/dashboard');
});

Route::get('/kehilangan-admin', function () {
    return view('admin/kehilangan');
});

Route::get('/penemuan-admin', function () {
    return view('admin/penemuan');
});

Route::get('/pengguna-admin', function () {
    return view('admin/pengguna');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('v_home');
