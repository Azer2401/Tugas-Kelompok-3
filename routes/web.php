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
/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/home', function () {
    return view('home', ['name'=>'reza']);
});*/
use App\Http\Controllers\HomepageController;
Route::get('/', [HomepageController::class, 'index']);

Route::get('/about', [HomepageController::class, 'about']);

Route::get('/kontak', [HomepageController::class, 'kontak']);

Route::get('/kategori', [HomepageController::class, 'kategori']);

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CustomerController;
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [DashboardController::class, 'index']);
    //route kategori
    Route::resource('kategori', KategoriController::class);
    //route produk
    Route::resource('produk', ProdukController::class);
    //route customer
    Route::resource('customer', CustomerController::class);
  });