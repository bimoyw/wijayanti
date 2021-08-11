<?php

namespace App\Http\Controllers;
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
    return view('user.login');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'ceklevel:admin'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/create_user', [UserController::class, 'create_user'])->name('create_user');
    Route::post('/insert_user', [UserController::class, 'insert_user'])->name('insert_user');
    Route::get('/view_user/{id}', [UserController::class, 'view_user'])->name('view_user');
    Route::post('/update_user/{id}', [UserController::class, 'update_user'])->name('update_user');
    Route::get('/delete_user/{id}', [UserController::class, 'delete_user'])->name('delete_user');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/tambahkategori', [KategoriController::class, 'tambahkategori'])->name('tambahkategori');
    Route::post('/insert_kategori', [KategoriController::class, 'insert_kategori'])->name('insert_kategori');
    Route::get('/delete_kategori/{id}', [KategoriController::class, 'delete_kategori'])->name('delete_kategori');

});

Route::middleware(['auth', 'ceklevel:admin,produksi,marketing,kepala produksi'])->group(function () {
    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::get('/tambahitem', [OrderController::class, 'tambahitem'])->name('tambahitem');
    Route::post('/insert_wo', [OrderController::class, 'insert_wo'])->name('insert_wo');
    Route::post('/masukkan', [OrderController::class, 'store']);
    Route::get('/tambahorder', [OrderController::class, 'tambahorder'])->name('tambahorder');
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan'); 
    Route::get('/tambahpelanggan', [PelangganController::class, 'tambahpelanggan'])->name('tambahpelanggan');
    Route::post('/insert_pelanggan', [PelangganController::class, 'insert_pelanggan'])->name('insert_pelanggan');  
    Route::get('/viewpelanggan/{id}', [PelangganController::class, 'viewpelanggan'])->name('viewpelanggan');
    Route::post('/updatepelanggan/{id}', [PelangganController::class, 'updatepelanggan'])->name('updatepelanggan');
    Route::get('/deletepelanggan/{id}', [PelangganController::class, 'deletepelanggan'])->name('deletepelanggan');
});
