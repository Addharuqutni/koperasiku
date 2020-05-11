<?php

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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/daftar', function () {
    return view('daftar');
});


Route::resource('anggota','AnggotaController');
Route::resource('simpanan','SimpananController');
Route::resource('pinjaman','PinjamanController');
Route::get('/anggota/delete/{id}','AnggotaController@delete');
Route::get('/anggota/{id}','AnggotaController@show');

// Route::get('/transaksi', function () {
//     return view('transaksi');
// });