<?php

use App\Http\Controllers\category\AllCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendLoginController;
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


    // category

    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/admin/categories/status', [CategoryController::class, 'status'])->name('category.status');
    Route::get('/admin/categories/fetch', [CategoryController::class, 'fetch'])->name('category.fetch');
    Route::post('/admin/categories/edit', [CategoryController::class, 'edit'])->name('category.updateStatus');

    Route::post('/admin/categories/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


    // SubCategoryController
    Route::get('/admin/subcategories', [SubCategoryController::class, 'index'])->name('SubCategoryController.index');
    Route::get('/admin/subcategories/create', [SubCategoryController::class, 'create'])->name('SubCategoryController.create');
    Route::post('/admin/subcategories/store', [SubCategoryController::class, 'store'])->name('store.SubCategoryController');
    Route::get('/admin/subcategories/status', [SubCategoryController::class, 'status'])->name('SubCategoryController.status');
    Route::get('/admin/subcategories/fetch', [SubCategoryController::class, 'fetch'])->name('SubCategoryController.fetch');
    Route::post('/admin/subcategories/edit', [SubCategoryController::class, 'edit'])->name('SubCategoryController.updateStatus');
    Route::post('/admin/subcategories/update', [SubCategoryController::class, 'update'])->name('SubCategoryController.update');
    Route::delete('/admin/subcategories/delete/{id}', [SubCategoryController::class, 'delete'])->name('SubCategoryController.delete');


    // tages

    Route::get('/admin/tages', [TagController::class, 'index'])->name('admin.tag.index');
    Route::get('/admin/tages/create', [TagController::class, 'create'])->name('admin.tag.create');
    Route::post('/admin/tages/store', [TagController::class, 'store'])->name('admin.tag.store');
    Route::get('/admin/tages/status', [TagController::class, 'status'])->name('admin.tag.status');
    Route::get('/admin/tages/fetch', [TagController::class, 'fetch'])->name('admin.tag.fetch');
    Route::post('/admin/tages/edit', [TagController::class, 'edit'])->name('admin.tag.updateStatus');

    Route::post('/admin/tages/update', [TagController::class, 'update'])->name('admin.tag.update');
    Route::delete('/admin/tages/delete/{id}', [TagController::class, 'delete'])->name('admin.tag.delete');



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



require __DIR__.'/auth.php';
