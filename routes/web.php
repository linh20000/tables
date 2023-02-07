<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;

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

Route::get('admin/login', [App\Http\Controllers\Admin\LoginController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
Route::get('/admin/logout',[App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/',[App\Http\Controllers\Admin\NewOrderController::class,'showHome'])->name('admin.showHome');

    Route::prefix('category')->group(function() {
        // get
        Route::get('list',[App\Http\Controllers\Admin\CategoryController::class,'showCategoriesList'])->name('admin.showCategoriesList');
        Route::get('search', [App\Http\Controllers\Admin\CategoryController::class,'search'])->name('admin.category.search');

        // post
        Route::get('create',[App\Http\Controllers\Admin\CategoryController::class,'interfaceAddCategoriesList'])->name('admin.interfaceAddCategoriesList');
        Route::post('create',[App\Http\Controllers\Admin\CategoryController::class,'addCategoriesList'])->name('admin.postCategoriesList');
        // update
        Route::get('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'getEdit'])->name('admin.getUpdateCategoriesList');
        Route::post('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'postEdit'])->name('admin.postUpdateCategoriesList');

        // delete
        Route::get('list/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'deleteCategoriesList'])->name('admin.deleteCategoriesList');
    });


    Route::prefix('order')->group(function() {
        //show list order
        Route::get('/get', [App\Http\Controllers\Admin\OrderController::class, 'showListOrder'])->name('showListOrder');

        
        // show detail order
        Route::get('/details-{id}', [App\Http\Controllers\Admin\OrderController::class, 'showDetailsOrder'])->name('showDetailsOrder');
        Route::post('update-{id}', [App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])->name('updateStatus');
        Route::get('delete-{id}', [App\Http\Controllers\Admin\OrderController::class, 'deleteOrder'])->name('deleteOrder');

    });

    Route::prefix('appointment')->group(function() {
        // get update
        Route::get('list',[App\Http\Controllers\Admin\OrderController::class,'orderAppointment'])->name('get.orderAppointment');
    });

    Route::prefix('service')->group(function() {
        Route::get('list',[App\Http\Controllers\Admin\CategoryController::class, 'showServiceCategory'])->name('admin.ShowServiceCategory');
         // post
        Route::get('create',[App\Http\Controllers\Admin\CategoryController::class,'getAddServiceCategory'])->name('admin.getAddServiceCategory');
        Route::post('create',[App\Http\Controllers\Admin\CategoryController::class,'addServiceCategory'])->name('admin.addServiceCategory');
        // update
        Route::get('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'getEditService'])->name('admin.getUpdateServiceCategory');
        Route::post('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'postEditService'])->name('admin.postServiceCategory');

        // delete
        Route::get('list/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'deleteServiceCategory'])->name('admin.deleteServiceCategory');
    });

    Route::prefix('banner')->group(function() {
        Route::get('list',[BannerController::class,'viewBannerList'])->name('admin.viewBannerList');
        Route::get('create',[BannerController::class,'createBanner'])->name('banner.create');
        Route::post('create',[BannerController::class,'storeBanner']);
        Route::get('update/{id}',[BannerController::class,'getUpdateBanner'])->name('banner.getUpdate');
        Route::post('update/{id}',[BannerController::class,'updateBanner'])->name('banner.update');
        Route::get('deletebanner/{id}', [BannerController::class, 'deleteBanner'])->name('banner.delete');
    });

    // product ???
    Route::prefix('products')->group(function() {
        // get product
        Route::get('list', [App\Http\Controllers\Admin\ProductController::class,'showProductList'])->name('admin.showProductList');
        Route::get('search', [App\Http\Controllers\Admin\ProductController::class,'search'])->name('admin.product.search');
        // post product
        Route::get('create', [App\Http\Controllers\Admin\ProductController::class,'getCreateProduct'])->name('admin.getCreateProduct');
        Route::post('create', [App\Http\Controllers\Admin\ProductController::class,'addProduct'])->name('admin.addProduct');

        // update Product
        Route::get('list/update/{id}', [App\Http\Controllers\Admin\ProductController::class,'getUpdateProduct'])->name('admin.getUpdateProduct');
        Route::post('list/update/{id}', [App\Http\Controllers\Admin\ProductController::class,'updateProduct'])->name('admin.updateProduct');

        // delete product
        Route::get('list/delete/{id}', [App\Http\Controllers\Admin\ProductController::class,'deleteProduct'])->name('admin.deleteProduct');
    });

    Route::prefix('blog')->group(function() {
        Route::get('list',[BlogController::class,'BlogList'])->name('blog.list');
        Route::get('create',[BlogController::class,'createBlog'])->name('blog.create');
        Route::post('create',[BlogController::class,'storeBlog']);
        Route::get('update/{id}',[BlogController::class,'getUpdateBlog'])->name('blog.getUpdate');
        Route::post('update/{id}',[BlogController::class,'updateBlog'])->name('blog.update');
        Route::get('deleteblog/{id}', [BlogController::class, 'deleteBlog'])->name('blog.delete');
    });

    Route::prefix('policy')->group(function(){
        Route::get('list',[PolicyController::class,'viewPolicy'])->name('policy.list');
        Route::get('create',[PolicyController::class,'createPolicy'])->name('policy.create');
        Route::post('create',[PolicyController::class,'storePolicy']);
        Route::get('update/{id}',[PolicyController::class,'getUpdatePolicy'])->name('policy.getUpdate');
        Route::post('update/{id}',[PolicyController::class,'updatePolicy'])->name('policy.update');
        Route::get('deletePolicy/{id}', [PolicyController::class, 'deletePolicy'])->name('policy.delete');
    });

    Route::prefix('shared')->group(function(){
        Route::get('list',[SharedController::class,'viewShared'])->name('shared.list');
        Route::get('create',[SharedController::class,'createShared'])->name('shared.create');
        Route::post('create',[SharedController::class,'storeShared']);
        Route::get('update/{id}',[SharedController::class,'getUpdateShared'])->name('shared.getUpdate');
        Route::post('update/{id}',[SharedController::class,'updateShared'])->name('shared.update');
        Route::get('deleteShared/{id}', [SharedController::class, 'deleteShared'])->name('shared.delete');
    });

    // introduce

    Route::prefix('introduce')->group(function() {
        // get update
        Route::get('update',[App\Http\Controllers\Admin\IntroduceController::class,'getUpdateIntroduce'])->name('get.intro');
        // post update
        Route::post('update-{id}',[App\Http\Controllers\Admin\IntroduceController::class,'updateIntroduce'])->name('updateIntroduce');
    });

    Route::prefix('appointment')->group(function() {
        // get update
        Route::get('list',[App\Http\Controllers\Admin\OrderController::class,'orderAppointment'])->name('get.orderAppointment');
    });

    // feelback
    Route::prefix('feedback')->group(function() {
        //show list order
        Route::get('/get', [App\Http\Controllers\Admin\FeedbackController::class, 'showFeedback'])->name('showFeedback');
        Route::get('/create', [App\Http\Controllers\Admin\FeedbackController::class, 'showcreateFeedback'])->name('showcreateFeedback');
        Route::post('/create', [App\Http\Controllers\Admin\FeedbackController::class, 'createFeedback'])->name('createFeedback');
        // show detail order
        Route::get('/update-{id}', [App\Http\Controllers\Admin\FeedbackController::class, 'showUpdateFeedback'])->name('showUpdateFeedback');
        Route::post('/update-{id}', [App\Http\Controllers\Admin\FeedbackController::class, 'UpdateFeedback'])->name('updateFeedback');
        Route::get('/delete-{id}', [App\Http\Controllers\Admin\FeedbackController::class, 'deleteFeedback'])->name('deleteFeedback');
        
    });

    // question
    Route::prefix('question')->group(function () {
        // get
        Route::get('update', [App\Http\Controllers\Admin\EditQuestionController::class, 'getEdit'])->name('admin.getEditQuestion');
        // post
        Route::post('update', [App\Http\Controllers\Admin\EditQuestionController::class, 'updateQuestion'])->name('admin.getEditQuestion');
    });

    // editting
    Route::prefix('editing')->group(function () {
        // get
        Route::get('update', [App\Http\Controllers\Admin\EditProfileController::class, 'getEdit'])->name('admin.getEditProfile');
        // post
        Route::post('update', [App\Http\Controllers\Admin\EditProfileController::class, 'updateProfile'])->name('admin.getEditProfile');
    });
});









// 

Route::get('/', function () {
    return view('frontend.home.index');
});

<<<<<<< HEAD
// trang chủ 
Route::get('/', [App\Http\Controllers\frontend\HomeInterfaceController::class, 'showHome'])->name('showHome');



// giỏ hàng
Route::get('/gio-hang', [App\Http\Controllers\frontend\ProductCartController::class, 'CartList'])->name('CartList');
=======
>>>>>>> 38f542e02a004cd0bd33895b6ba4008ab894cb1e


