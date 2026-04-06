<?php


// 1. Registration Route (Usually Public)
use App\Http\Controllers\Api\AuthenticatedSessionController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RegisteredUserController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Public
Route::post('/user/register', [RegisteredUserController::class, 'store']);
Route::post('/user/login', [AuthenticatedSessionController::class, 'store']);

// Protected
Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/user', function (Request $request) {  return response()->json($request->user()); });

});

// Admin Only

Route::middleware(['auth:sanctum', 'admin'])->prefix('Api')->group(function () {

    // User Management API
    Route::get('/users', [UserController::class, 'index']);          // List users
    Route::post('/users', [UserController::class, 'store']);         // Create user
    Route::post('/users/update', [UserController::class, 'update']); // Update user
    Route::delete('/users/{id}', [UserController::class, 'delete']); // Delete user
    Route::post('/users/status', [UserController::class, 'updateStatus']); // Status update
    Route::get('/users/search', [UserController::class, 'fetch']);   // Search/Fetch



    // category

    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/categories/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/categories/status', [CategoryController::class, 'status'])->name('category.status');
    Route::get('/categories/fetch', [CategoryController::class, 'fetch'])->name('category.fetch');
    Route::post('/categories/edit', [CategoryController::class, 'edit'])->name('category.updateStatus');

    Route::post('/categories/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


    // tages

    Route::get('/tages', [TagController::class, 'index'])->name('tag.index');
    Route::get('/tages/create', [TagController::class, 'create'])->name('tage.create');
    Route::post('/tages/store', [TagController::class, 'store'])->name('tage.store');
    Route::get('/tages/edit', [TagController::class, 'edit'])->name('tag.edit');
    Route::get('/tages/status', [TagController::class, 'status'])->name('tage.status');
    Route::get('/tages/fetch', [TagController::class, 'fetch'])->name('tage.fetch');
    Route::post('/tages/edit', [TagController::class, 'edit'])->name('tage.updateStatus');

    Route::post('/tages', [TagController::class, 'update'])->name('tage.update');
    Route::delete('/tage/delete/{id}', [TagController::class, 'delete'])->name('tage.delete');












    Route::get('/user', function (Request $request) {
        return response()->json($request->user());
    });

});
