<?php

use App\Http\Controllers\Admin\Shop\ShopController;
use App\Http\Controllers\AdminSearchController;
use App\Http\Controllers\category\AllCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontedFlash_dealsController;
use App\Http\Controllers\FrontedShopController;
use App\Http\Controllers\FrontedShopdetailsController;
use App\Http\Controllers\FrontendLoginController;
use App\Http\Controllers\GestProfileController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\PasswordRestContrller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\Tag;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/serch/', [AdminSearchController::class , 'search'])->name('admin.search');
Route::get('/dashboard', function () { return view('user.dashboard');})->middleware(['auth', 'verified','user'])->name('user.dashboard');

Route::get('/moderator/dashboard', function () { return view('moderator.dashboard');})->middleware(['auth', 'verified','moderator'])->name('moderator.dashboard');


// password reset
Route::get('/password/reset',[PasswordRestContrller::class, 'showResetForm'])->name('password.request.form');
Route::post('/password/email', [PasswordRestContrller::class, 'sendResetLink'])->name('password.email');
Route::get('/password/reset/{token}', [PasswordRestContrller::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [PasswordRestContrller::class, 'resetPassword'])->name('password.update');



Route::middleware('auth','verified','admin')->group(function () {

// user add

Route::get('/admin/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/add-user', [UserController::class, 'create'])->name('add.user');
    Route::post('/admin/add-user', [UserController::class, 'store'])->name('store.user');
    Route::post('/admin/usre-update', [UserController::class, 'update'])->name('user.update');
   Route::delete('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::post('/admin/user/updateStatus', [UserController::class, 'updateStatus'])->name('user.status.change');
    Route::get('/admin/user/fetch', [UserController::class, 'fetch'])->name('user.fetch');


// ==================== Admin Category Routes ====================
 Route::get('/admin/categories/index', [CategoryController::class, 'index'])->name('admin.category.index');
 Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('admin.category.store');
 Route::get('/admin/categories/fetch', [CategoryController::class, 'fetch'])->name('admin.category.fetch');
 Route::post('/admin/categories/status/{id}', [CategoryController::class, 'status'])->name('admin.categories.status');
 Route::post('/admin/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');

Route::prefix('admin/subcategory')->group(function () {

    Route::get('/index', [SubCategoryController::class, 'index'])->name('admin.subcategory.index');

    Route::post('/store', [SubCategoryController::class, 'store'])->name('admin.subcategory.store');

    Route::get('/admin/subcategories/fetch', [SubCategoryController::class, 'fetch'])
    ->name('admin.subcategory.fetch');

    Route::post('/status', [SubCategoryController::class, 'status'])->name('admin.subcategory.status');

    Route::post('/update/{id}', [SubCategoryController::class, 'update'])->name('admin.subcategory.update');

    Route::delete('/delete/{id}', [SubCategoryController::class, 'destroy'])->name('admin.subcategory.delete');

});


    // tages

    Route::get('/admin/tages', [TagController::class, 'index'])->name('admin.tag.index');
    Route::get('/admin/tages/create', [TagController::class, 'create'])->name('admin.tag.create');
    Route::post('/admin/tages/store', [TagController::class, 'store'])->name('admin.tag.store');
    Route::get('/admin/tages/status', [TagController::class, 'status'])->name('admin.tag.status');
    Route::get('/admin/tages/fetch', [TagController::class, 'fetch'])->name('admin.tag.fetch');
    Route::post('/admin/tages/edit', [TagController::class, 'edit'])->name('admin.tag.updateStatus');

    Route::post('/admin/tages/update', [TagController::class, 'update'])->name('admin.tag.update');
    Route::delete('/admin/tages/delete/{id}', [TagController::class, 'delete'])->name('admin.tag.delete');



    // shops
    Route::get('/admin/shops', [ShopController::class, 'index'])->name('admin.shops');
    Route::get('/admin/shops/create', [ShopController::class, 'create'])->name('admin.shops.create');
    Route::post('/admin/shops/store', [ShopController::class, 'store'])->name('admin.shops.store');
    Route::get('/admin/shops/status', [ShopController::class, 'status'])->name('admin.shops.status');
    Route::get('/admin/shops/fetch', [ShopController::class, 'fetch'])->name('admin.shops.fetch');
     Route::post('/admin/shops/update', [ShopController::class, 'update'])->name('admin.shops.update');
    Route::post('/admin/shops/edit', [ShopController::class, 'edit'])->name('admin.shops.updateStatus');
Route::delete('/admin/shops/delete/{id}', [ShopController::class, 'delete'])->name('admin.shops.delete');

});



// forontend routes

Route::get('/', [FrontendLoginController::class, 'welcome'])->name('welcome');


Route::get('/user/login', [FrontendLoginController::class, 'showLoginForm'])->name('user.login');
Route::get('/user/signup', [FrontendLoginController::class, 'showSignupForm'])->name('user.signup');
Route::post('/user/signup', [FrontendLoginController::class, 'signup'])->name('gest.store');
Route::post('/user/login', [FrontendLoginController::class, 'login'])->name('gest.login');
Route::post('/user/logout', [FrontendLoginController::class, 'logout'])->name('gest.logout');

// fronted AllCategory Contrller
Route::get('/all/Category', [AllCategoryController::class, 'allCategory'])->name('all.categoy');

//shops
Route::get('/shop/index', [FrontedShopController::class, 'index'])->name('shop.page');

// shop.details
Route::get('/shop/details', [FrontedShopdetailsController::class, 'index'])->name('shop.details');


// FrontedFlash_deals
Route::get('/flash/deals/index', [FrontedFlash_dealsController::class, 'index'])->name('flash.deals.page');
// 'auth:gest' লিখে লারাভেলকে বলে দিতে হয় কোন গার্ড চেক করবে
Route::get('/gest/dashboard', [GestProfileController::class, 'dashboard']) ->name('gest.dashboard');
Route::get('/dashboard/order/page', [GestProfileController::class, 'dashbashboard_order']) ->name('dashboard.order.page');
Route::get('/dashboard/download', [GestProfileController::class, 'dashboard_download']) ->name('dashboard.download');
Route::get('/dashboard/returns/request', [GestProfileController::class, 'returns_request']) ->name('dashboard.returns.request');
Route::get('/dashboard/profiel/information', [GestProfileController::class, 'profiel_information']) ->name('profiel.information');
Route::get('/dashboard/profiel/edit', [GestProfileController::class, 'dashboard_profile_edit']) ->name('dashboard.profile.edit');

// address
Route::get('/dashboard/address', [GestProfileController::class, 'dashboard_address']) ->name('dashboard.address');
Route::get('/dashboard/address/add', [GestProfileController::class, 'address_add']) ->name('address.add');
Route::post('/dashboard/address/store', [GestProfileController::class, 'address_store']) ->name('address.store');


Route::get('/dashboard/wishlist', [GestProfileController::class, 'dashboard_wishlist']) ->name('dashboard.wishlist');
Route::get('/dashboard/reviews', [GestProfileController::class, 'dashboard_reviews']) ->name('dashboard.reviews');
Route::get('/dashboard/change/password', [GestProfileController::class, 'change_password']) ->name('dashboard.change.password');
Route::post('/dashboard/password/update', [GestProfileController::class, 'password_update']) ->name('gest.password.update');
Route::post('/dashboard/image/update', [GestProfileController::class, 'image']) ->name('dashboard.image');


//

Route::get('/divisions', [LocationController::class, 'getDivisions']);
Route::get('/districts/{id}', [LocationController::class, 'getDistricts']);
Route::get('/upazilas/{id}', [LocationController::class, 'getUpazilas']);
Route::get('/unions/{id}', [LocationController::class, 'getUnions']);
Route::get('/villages/{id}', [LocationController::class, 'getVillages']);




require __DIR__.'/auth.php';
