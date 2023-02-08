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
// Đăng nhập trang quản lí
Route::get('admin/login', [App\Http\Controllers\Admin\LoginController::class, 'showLogin'])->name('admin.showlogin');
Route::get('admin', [App\Http\Controllers\Admin\LoginController::class, 'showLogin'])->name('admin.showlogin');

// đăng nhập 
Route::post('admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');

// Đăng xuất trang quản lí
Route::get('/admin/logout',[App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');

// 
Route::prefix('admin')->middleware('auth')->group(function () {
    // Trang chủ admin
    Route::get('/showDashbroad', [App\Http\Controllers\admin\LoginController::class, 'showHome'])->name('admin.home');

    // Danh mục 
    Route::prefix('category')->group(function() {
        
        // hiển thị danh sách danh mục
        Route::get('/', [App\Http\Controllers\admin\CategoryController::class, 'showCategory'])->name('admin.category');
        // thêm danh mục
        Route::get('create', [App\Http\Controllers\admin\CategoryController::class, 'createCategory'])->name('admin.createCategory');
        Route::post('create', [App\Http\Controllers\admin\CategoryController::class, 'postCategory'])->name('admin.postCategory');
        // chỉnh sửa danh mục
        Route::get('update-{id}', [App\Http\Controllers\admin\CategoryController::class, 'getUpdateCategory'])->name('admin.getUpdateCategory');
        Route::post('update-{id}', [App\Http\Controllers\admin\CategoryController::class, 'updatecategory'])->name('admin.updateCategory');

        // xóa danh mục
        Route::get('delete-{id}', [App\Http\Controllers\admin\CategoryController::class, 'deleteCategory'])->name('admin.deleteCategory');

        // tìm kiếm danh mục
        Route::get('search', [App\Http\Controllers\Admin\CategoryController::class,'search'])->name('admin.category.search');
    });

    // banner
    Route::prefix('banner')->group(function() {
        
        // hiện thị danh sách banner
        Route::get('/', [App\Http\Controllers\admin\BannerController::class, 'showBanner'])->name('admin.banner');

        // thêm banner
        Route::get('/create', [App\Http\Controllers\admin\BannerController::class, 'createBanner'])->name('admin.createBanner');
        Route::post('/create', [App\Http\Controllers\admin\BannerController::class, 'postBanner'])->name('admin.postBanner');

        // chỉnh sửa banner
        Route::get('/update-{id}', [App\Http\Controllers\admin\BannerController::class, 'getUpdateBanner'])->name('admin.getUpdateBanner');
        Route::post('/update-{id}', [App\Http\Controllers\admin\BannerController::class, 'updateBanner'])->name('admin.updateBanner');

        // xóa banner
        Route::get('delete-{id}', [App\Http\Controllers\admin\BannerController::class, 'deleteBanner'])->name('admin.deleteBanner');

    });


    // feelback
    Route::prefix('feedback')->group(function() {

        // hiển thị phản hồi khách hành
        Route::get('/get', [App\Http\Controllers\Admin\FeedbackController::class, 'showFeedback'])->name('showFeedback');

        // thêm phản hồi khách hàng
        Route::get('/create', [App\Http\Controllers\Admin\FeedbackController::class, 'showcreateFeedback'])->name('showcreateFeedback');
        Route::post('/create', [App\Http\Controllers\Admin\FeedbackController::class, 'createFeedback'])->name('createFeedback');

        // chỉnh sửa phản hồi
        Route::get('/update-{id}', [App\Http\Controllers\Admin\FeedbackController::class, 'showUpdateFeedback'])->name('showUpdateFeedback');
        Route::post('/update-{id}', [App\Http\Controllers\Admin\FeedbackController::class, 'UpdateFeedback'])->name('updateFeedback');
        Route::get('/delete-{id}', [App\Http\Controllers\Admin\FeedbackController::class, 'deleteFeedback'])->name('deleteFeedback');
        
    });


    // plugin
    Route::prefix('editing')->group(function () {
        // get
        Route::get('update', [App\Http\Controllers\Admin\EditPluginController::class, 'getEdit'])->name('admin.getEditProfile');
        // post
        Route::post('update', [App\Http\Controllers\Admin\EditPluginController::class, 'updatePlugin'])->name('admin.getEditProfile');
    });

    

});


// Giao diện người dùng

// 

Route::get('/', function () {
    return view('frontend.home.index');
});

// trang chủ 
Route::get('/', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'showHome'])->name('showHome');

// Danh sách sản phẩm
Route::get('/danh-sach-san-pham', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'ProductList'])->name('ProductList');

// Giỏ hàng
Route::get('/gio-hang', [App\Http\Controllers\frontend\ProductCartController::class, 'CartList'])->name('CartList');

// Tin tức
Route::get('/tin-tuc', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'showNewTitle'])->name('showNewTitle');

// Giới thiệu
Route::get('/gioi-thieu', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'introduce'])->name('introduce');

// Thanh toán
Route::get('/thanh-toan', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'Payment'])->name('Payment');


// danh mục sản phẩm
Route::get('/danh-muc-{id}-{slug}',[App\Http\Controllers\Frontend\HomeInterfaceController::class, 'showProduct'])->name('showProduct');
