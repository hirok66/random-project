<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Tag;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () { return view('dashboard');})->middleware(['auth', 'verified','user'])->name('dashboard');
Route::get('/moderator/dashboard', function () { return view('moderator.dashboard');})->middleware(['auth', 'verified','moderator'])->name('moderator.dashboard');






Route::middleware('auth','verified','admin')->group(function () {

// user add

Route::get('/admin/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/add-user', [UserController::class, 'create'])->name('add.user');
    Route::post('/admin/add-user', [UserController::class, 'store'])->name('store.user');
    Route::post('/admin/usre-update', [UserController::class, 'update'])->name('user.update');
   Route::delete('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::post('/admin/user/updateStatus', [UserController::class, 'updateStatus'])->name('user.updateStatus');
    Route::get('/admin/user/fetch', [UserController::class, 'fetch'])->name('user.fetch');


    // category

    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/admin/categories/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/admin/categories/status', [CategoryController::class, 'status'])->name('category.status');
    Route::get('/admin/categories/fetch', [CategoryController::class, 'fetch'])->name('category.fetch');
    Route::post('/admin/categories/edit', [CategoryController::class, 'edit'])->name('category.updateStatus');

    Route::post('/admin/categories', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


    // tages

    Route::get('/admin/tages', [TagController::class, 'index'])->name('tag.index');
    Route::get('/admin/tages/create', [TagController::class, 'create'])->name('tage.create');
    Route::post('/admin/tages/store', [TagController::class, 'store'])->name('tage.store');
    Route::get('/admin/tages/edit', [TagController::class, 'edit'])->name('tag.edit');
    Route::get('/admin/tages/status', [TagController::class, 'status'])->name('tage.status');
    Route::get('/admin/tages/fetch', [TagController::class, 'fetch'])->name('tage.fetch');
    Route::post('/admin/tages/edit', [TagController::class, 'edit'])->name('tage.updateStatus');

    Route::post('/admin/tages', [TagController::class, 'update'])->name('tage.update');
    Route::delete('/admin/tage/delete/{id}', [TagController::class, 'delete'])->name('tage.delete');



});

require __DIR__.'/auth.php';
