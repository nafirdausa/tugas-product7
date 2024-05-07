<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// input produk
Route::post('/products', [ProductController::class, 'createProduct'])->name('createproducts');
Route::get('/tambah-products', [ProductController::class, 'tambahProducts'])->name('tambah_products');

// tampilan list data produk admin
// Route::get('/product',[ProductController::class, 'products'])->name('product');
Route::get('/admin/{id}/list-product',[ProductController::class, 'productsList'])->name('list_product');

// tampilan list data produk user
Route::get('/products',[ProductController::class, 'productUser'])->name('product_user');

Route::get("/profile/{id}", [ProductController::class, 'profile']);

// update produk
Route::get('/product/{id}/update', [ProductController::class, 'productUpdate']);
Route::put('/product/{id}/update', [ProductController::class, 'update']);

// delete produk
Route::post('/product/{id}/delete', [ProductController::class, 'delete']);


