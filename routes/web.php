<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUSVideCOntroller;
use App\Http\Controllers\Admin\AboutUs_Copy_Controller;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\Shop\ShopController;
use App\Http\Controllers\AdminPrivacyPolicy;
use App\Http\Controllers\AdminSearchController;
use App\Http\Controllers\AdminsubscribersController;
use App\Http\Controllers\BecomeController;
use App\Http\Controllers\Brandontroller;
use App\Http\Controllers\category\AllCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontedFlash_dealsController;
use App\Http\Controllers\FrontedShopController;
use App\Http\Controllers\FrontedShopdetailsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontendLoginController;
use App\Http\Controllers\GestProfileController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\PasswordRestContrller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReturnPolicyController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TermsCondtinController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



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


    Route::middleware('auth','verified','admin')->group(function () {

// subscribers
    Route::get('/admin/subscribers/index', [AdminsubscribersController::class, 'index'])->name('admin.subscribers.index');
    Route::get('/send-single-email/{id}', [AdminsubscribersController::class, 'sendSingleEmail'])->name('send.single.email');

// admin & modarator about us
 Route::get('/abouts/create', [AboutUsController::class, 'index'])->name('about.us.make');
 Route::post('/abouts/store', [AboutUsController::class, 'store'])->name('about.store');
 Route::get('/abouts/edit/{id}', [AboutUsController::class, 'edit'])->name('about.edit');
 Route::post('/abouts/update/{id}', [AboutUsController::class, 'update'])->name('about.update');
 Route::get('/abouts/delete/{id}', [AboutUsController::class, 'delete'])->name('about.delete');


 Route::get('/about/create/index', [AboutUs_Copy_Controller::class, 'index'])->name('about.us.index');
 Route::post('/amer/stores/copy', [AboutUs_Copy_Controller::class, 'store'])->name('amer.store');
 Route::POST('/about/status/{id}', [AboutUs_Copy_Controller::class, 'status'])->name('about.status');
 Route::get('/about/edits/eopy/{id}', [AboutUs_Copy_Controller::class, 'edit'])->name('edit.about');
 Route::post('/about/updates/copy/{id}', [AboutUs_Copy_Controller::class, 'update'])->name('update.about');
 Route::get('/about/deletes/copy/{id}', [AboutUs_Copy_Controller::class, 'delete'])->name('delete.about');

//  about_us.video_index

route::get('about_us/video_index',[AboutUSVideCOntroller::class, 'index'])->name('about_us.video_index');
route::post('about_us/video/store',[AboutUSVideCOntroller::class, 'store'])->name('video.store');
route::get('about_us/edit/{id}',[AboutUSVideCOntroller::class, 'edit'])->name('video.edit');
route::post('about_us/update/{id}',[AboutUSVideCOntroller::class, 'update'])->name('video.update');
route::get('about_us/delete/{id}',[AboutUSVideCOntroller::class, 'delete'])->name('video.delete');

// brand
route::get('brand/index',[Brandontroller::class, 'index'])->name('brand.index');
route::post('brand/store',[Brandontroller::class, 'store'])->name('brand.store');
route::get('brand/edit/{id}',[Brandontroller::class, 'edit'])->name('brand.edit');
route::post('brand/update/{id}',[Brandontroller::class, 'update'])->name('brand.update');
route::get('brand/status/{id}',[Brandontroller::class, 'status'])->name('brand.status');
route::get('brand/delete/{id}',[Brandontroller::class, 'delete'])->name('brand.delete');



// admin.privacy.ploicy


// INDEX
Route::get('admin/privacy/policy', [AdminPrivacyPolicy::class, 'index'])
    ->name('policy.index');

// CREATE PAGE
Route::get('admin/privacy/policy/create', [AdminPrivacyPolicy::class, 'create'])
    ->name('policy.create');

// STORE
Route::post('admin/privacy/policy/store', [AdminPrivacyPolicy::class, 'store'])
    ->name('policy.store');

// EDIT PAGE
Route::get('admin/privacy/policy/edit/{id}', [AdminPrivacyPolicy::class, 'edit'])
    ->name('policy.edit');

// UPDATE
Route::post('admin/privacy/policy/update/{id}', [AdminPrivacyPolicy::class, 'update'])
    ->name('policy.update');

// DELETE
Route::get('admin/privacy/policy/delete/{id}', [AdminPrivacyPolicy::class, 'delete'])
    ->name('policy.delete');

// STATUS TOGGLE
Route::get('admin/privacy/policy/status/{id}', [AdminPrivacyPolicy::class, 'status'])
    ->name('policy.status');




// admin.Terms and Condition.ploicy


// INDEX
Route::get('admin/terms/conditin/ploicy/index', [TermsCondtinController::class, 'index'])
    ->name('terms.index');

// CREATE PAGE
Route::get('admin/terms/conditin/ploicy/create', [TermsCondtinController::class, 'create'])
    ->name('terms.create');

// STORE
Route::post('admin/terms/conditin/ploicy/store', [TermsCondtinController::class, 'store'])
    ->name('terms.store');

/// EDIT
Route::get('admin/terms/conditin/ploicy/edit/{id}', [TermsCondtinController::class, 'edit'])
    ->name('terms.edit');

// UPDATE
Route::post('admin/terms/conditin/ploicy/update/{id}', [TermsCondtinController::class, 'update'])
    ->name('terms.update');

// DELETE
Route::get('admin/terms/conditin/ploicy/delete/{id}', [TermsCondtinController::class, 'delete'])
    ->name('terms.delete');
// STATUS TOGGLE
Route::get('admin/terms/conditin/ploicystatus/{id}', [TermsCondtinController::class, 'status'])
    ->name('terms.status');





// FaqController
// INDEX
Route::get('admin/faq/ploicy/index', [FaqController::class, 'index'])
    ->name('faq.index');

// CREATE PAGE
Route::get('admin/faq/ploicy/create', [FaqController::class, 'create'])
    ->name('faq.create');

// STORE
Route::post('admin/faq/ploicy/store', [FaqController::class, 'store'])
    ->name('faq.store');

/// EDIT
Route::get('admin/faq/ploicy/edit/{id}', [FaqController::class, 'edit'])
    ->name('faq.edit');

// UPDATE
Route::post('admin/faq/ploicy/update/{id}', [FaqController::class, 'update'])
    ->name('faq.update');

// DELETE
Route::get('admin/faq/ploicy/delete/{id}', [FaqController::class, 'delete'])
    ->name('faq.delete');
// STATUS TOGGLE
Route::get('admin/faq/ploicystatus/{id}', [FaqController::class, 'status'])
    ->name('faq.status');

    // admin.Terms and Condition.ploicy


    // INDEX
Route::get('admin/become/policy/index', [BecomeController::class, 'index'])
    ->name('become.index');

// CREATE
Route::get('admin/become/policy/create', [BecomeController::class, 'create'])
    ->name('become.create');

// STORE
Route::post('admin/become/policy/store', [BecomeController::class, 'store'])
    ->name('become.store');

// EDIT
Route::get('admin/become/policy/edit/{id}', [BecomeController::class, 'edit'])
    ->name('become.edit');

// UPDATE
Route::post('admin/become/policy/update/{id}', [BecomeController::class, 'update'])
    ->name('become.update');

// DELETE
Route::get('admin/become/policy/delete/{id}', [BecomeController::class, 'delete'])
    ->name('become.delete');

// STATUS TOGGLE
Route::get('admin/become/policy/status/{id}', [BecomeController::class, 'status'])
    ->name('become.status');

    // admin.Terms and Condition.ploicy


    // INDEX
Route::get('admin/return/policy/index', [ReturnPolicyController::class, 'index'])
    ->name('return.index');

// CREATE
Route::get('admin/return/policy/create', [ReturnPolicyController::class, 'create'])
    ->name('return.create');

// STORE
Route::post('admin/return/policy/store', [ReturnPolicyController::class, 'store'])
    ->name('return.store');

// EDIT
Route::get('admin/return/policy/edit/{id}', [ReturnPolicyController::class, 'edit'])
    ->name('return.edit');

// UPDATE
Route::post('admin/return/policy/update/{id}', [ReturnPolicyController::class, 'update'])
    ->name('return.update');

// DELETE
Route::get('admin/return/policy/delete/{id}', [ReturnPolicyController::class, 'delete'])
    ->name('return.delete');

// STATUS TOGGLE
Route::get('admin/return/policystatus/{id}', [ReturnPolicyController::class, 'status'])
    ->name('return.status');
    });
// forontend routes

Route::get('/', [FrontendLoginController::class, 'welcome'])->name('welcome');
Route::get('/provacy/policy', [FrontendLoginController::class, 'policy'])->name('provacy.policy');
Route::get('/termsc/and/condition/policy', [FrontendLoginController::class, 'trmesc'])->name('termsc.and.condition');
Route::get('/return/policy', [FrontendLoginController::class, 'return'])->name('return.policy');
Route::get('/faq/', [FrontendLoginController::class, 'faq'])->name('faq.frontend');
Route::get('/become/vendor/', [FrontendLoginController::class, 'become'])->name('become.vendor');


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


// b
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

// subscriber
Route::post('/usre/Subscriber', [SubscriberController::class, 'subscriber']) ->name('gest.subscriber');

// About
Route::get('/about/index',[AboutController::class, 'index'])->name('about.us');

Route::get('/all/brand/index',[FrontendController::class, 'index'])->name('all.brand');





require __DIR__.'/auth.php';
