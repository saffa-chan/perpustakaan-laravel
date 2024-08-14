<?php


use App\Http\Controllers\PinjamController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ActionLogin;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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


//get,post, put delete
Route::get('getBuku/{category_id}', [AjaxController::class, 'getDataBuku']);
Route::resource('pinjam', PinjamController::class);
Route::resource('book', BooksController::class);
Route::post('login', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::resource('category', CategoryController::class);
Route::resource('dashboard', DashboardController::class);
Route::get('login', [LoginController::class, 'index']);
Route::resource('belajar', BelajarController::class);
Route::resource('user', UserController::class);

Route::get('tambah', [BelajarController::class, 'tambah']);
Route::post('store_tambah', [BelajarController::class, 'storeTambah'])->name('store_tambah');


Route::get('kurang', [BelajarController::class, 'kurang']);
Route::post('store_kurang', [BelajarController::class, 'storeKurang'])->name('store_kurang');

Route::get('kali', [BelajarController::class, 'kali']);
Route::post('store_kali', [BelajarController::class, 'storeKali'])->name('store_kali');

Route::get('bagi', [BelajarController::class, 'bagi']);
Route::post('store_bagi', [BelajarController::class, 'storeBagi'])->name('store_bagi');

Route::get('/', function () {
    return view('login');
});

Route::resource('/belajar', BelajarController::class);
