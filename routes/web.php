<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin/Petugas
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::resource('pengaduans', 'PengaduanController');

        Route::resource('tanggapan', 'TanggapanController');

        Route::get('masyarakat', 'AdminController@masyarakat');
        Route::delete('masyarakat/{id}', 'MasyarakatController@destroy')->name('masyarakat.destroy');
        Route::resource('staff', '\App\Http\Controllers\PetugasController');

        Route::get('laporan', 'AdminController@laporan')->name('laporan.show');
        Route::get('laporan/cetak', 'AdminController@cetak')->name('laporan.cetak');
        Route::get('pengaduan/cetak/{id}', 'AdminController@pdf');
    });


// Masyarakat
Route::prefix('user')
    ->middleware(['auth', 'MasyarakatMiddleware'])
    ->group(function () {
        Route::get('/', 'MasyarakatController@index')->name('masyarakat-dashboard');
        Route::resource('pengaduan', 'MasyarakatController');
        Route::get('pengaduan', 'MasyarakatController@lihat');
    });





require __DIR__ . '/auth.php';
