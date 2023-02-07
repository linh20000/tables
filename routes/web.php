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

// Trang chủ 
Route::get('/', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'showHome'])->name('showHome');

// Danh sách sản phẩm
Route::get('/danh-sach-san-pham', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'ProductList'])->name('ProductList');

// Giỏ hàng
Route::get('/gio-hang', [App\Http\Controllers\frontend\ProductCartController::class, 'CartList'])->name('CartList');

// Tin tức
Route::get('/tin-tuc', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'showNewTitle'])->name('showNewTitle');

// Thanh toán

Route::get('/thanh-toan', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'Payment'])->name('Payment');





