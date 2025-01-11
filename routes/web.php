<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

//Route::group(['middleware' => ['role:admin', 'auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);

    Route::resource('jabatans', App\Http\Controllers\JabatanController::class);
    Route::resource('metodePembayarans', App\Http\Controllers\MetodePembayaranController::class);
    Route::resource('pegawais', App\Http\Controllers\PegawaiController::class);
    Route::resource('pelanggans', App\Http\Controllers\PelangganController::class);
    Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
    Route::resource('barangs', App\Http\Controllers\BarangController::class);

    Route::resource('pembayarans', App\Http\Controllers\PembayaranController::class);
    Route::resource('transaksis', App\Http\Controllers\TransaksiController::class);

//});

Route::resource('users', App\Http\Controllers\UserController::class);
