<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer as Buyer;
use App\Http\Controllers\Supplier as Supplier;
use App\Http\Controllers\Backend as Backend;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\ImportdataController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\cFunction;
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

/////////// BUYER ///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('buyer/login-buy', [Buyer\buyerController::class, 'login_buyer']);
Route::post('buyer/login-buy-post', [Buyer\buyerController::class, 'login_buyer_post'])->name('buyer.login');
Route::get('buyer/logout-buy', [Buyer\buyerController::class, 'logout_buyer']);
Route::get('buyer/regis', [Buyer\buyerController::class, 'regis']);
Route::post('buyer/regis-post', [Buyer\buyerController::class, 'regis_post'])->name('pdpa');
Route::get('buyer/regis-buy', [Buyer\buyerController::class, 'regis_buyer']);
Route::post('buyer/regis-buy-post', [Buyer\buyerController::class, 'regis_buyer_post'])->name('step1');
Route::get('buyer/regiscon-buy', [Buyer\buyerController::class, 'regiscon_buyer']);
Route::post('buyer/regiscon-buy-post', [Buyer\buyerController::class, 'regiscon_buyer_post'])->name('step2');
Route::get('buyer/registerpass-buy', [Buyer\buyerController::class, 'registerpass_buyer']);
Route::post('buyer/registerpass-buy-post', [Buyer\buyerController::class, 'registerpass_buyer_post'])->name('step3');

Route::get('buyer/requestspares', [Buyer\RequestSparesController::class, 'index'])->name('buyer.requestspares');
Route::get('buyer/requestspares/add', [Buyer\RequestSparesController::class, 'add'])->name('buyer.requestspares.add');
Route::post('buyer/requestspares/add', function(){})->name('buyer.requestspares.store');

Route::get('buyer/requestspares/view', [Buyer\RequestSparesController::class, 'view'])->name('buyer.requestspares.view');
Route::get('buyer/requestspares/details', [Buyer\RequestSparesController::class, 'details'])->name('buyer.requestspares.details');



Route::group(['middleware' => ['buyer']], function () {
    Route::get('buyer/home-search', [Buyer\buyerController::class, 'home_search'])->name('buyer.home-search');
});

////////// END BUYER  ///////////////////////////////////////////////////////////////////////////////////////////////////////

// supplier login and regoster
//Login
    Route::get('supplier/login-sup', [Supplier\supplierController::class, 'login_supplier'])->name('supplier');
    Route::post('supplier/login-sup-post', [Supplier\supplierController::class,'login_supplier_post'])->name('supplier.login');

    Route::get('supplier/login/verify/phone', [Supplier\SupplierController::class, 'logphone_supplier'])->name('supplier.login.verify.phone');
    Route::post('supplier/login/verify/phone', [Supplier\Auth\SupplierAuthController::class,'verifyphone'])->name('supplier.login.verify.phone.post');

    Route::get('supplier/login/verify/otp', [Supplier\supplierController::class, 'logotp_supplier'])->name('supplier.login.verify.otp');
    Route::post('supplier/login/verify/otp', [Supplier\Auth\SupplierAuthController::class,'verifyotp'])->name('supplier.login.verify.otp.post');


//Register
    Route::get('supplier/regis-sup', [Supplier\supplierController::class, 'regis_supplier']);
    Route::post('supplier/regis-sup-post', [Supplier\supplierController::class, 'regis_supplier_post'])->name('supp-pdpa');

    Route::get('supplier/regisphone-sup', [Supplier\supplierController::class, 'regisphone_supplier']);

    Route::get('supplier/regisotp-sup', [Supplier\supplierController::class, 'regisotp_supplier']);

    Route::get('supplier/register-sup', [Supplier\supplierController::class, 'register_supplier']);
    Route::post('supplier/regiser-sup-post', [Supplier\supplierController::class, 'register_supplier_post'])->name('regiser-sup');


    Route::get('supplier/registercon-sup', [Supplier\supplierController::class, 'registercon_supplier']);
    Route::post('supplier/registercon-sup-post', [Supplier\supplierController::class, 'registercon_supplier_post'])->name('registercon-sup');

    Route::get('supplier/registercon-sup2', [Supplier\supplierController::class, 'registercon_supplier2']);
    Route::post('supplier/registercon-sup2-post', [Supplier\supplierController::class, 'registercon_supplier2_post'])->name('registercon-sup2');

    Route::get('supplier/registerbank-sup', [Supplier\supplierController::class, 'registerbank_supplier']);

    Route::get('supplier/registerpass-sup', [Supplier\supplierController::class, 'registerpass_supplier']);
    Route::post('supplier/registerpass-sup-post', [Supplier\supplierController::class, 'registerpass_supplier_post'])->name('registerpass-sup');

// end of supplier login and regoster

// Route::get('supplier/supplier-profile', [Supplier\supplierController::class, 'supplier_profile'])->name('supplier.supplier_profile');

Route::group(['middleware' => ['supplier']], function () {
    // Route::get('supplier/supplier-profile', [Supplier\supplierController::class, 'supplier_profile'])->name('supplier.supplier_profile');
    Route::get('supplier/profile', [Supplier\ProfileController::class,'index'])->name('supplier.profile');

    // impliment product controller
    Route::get('dropzone', [Supplier\ProductController::class, 'dropzone']);
    Route::post('products/dropzone/store', [Supplier\ProductController::class, 'dropzoneStore'])->name('dropzone.store');
    Route::post('products/dropzone/remove', [Supplier\ProductController::class, 'dropzoneRemove'])->name('dropzone.remove');

    Route::get('products/create_product_info', [Supplier\ProductController::class, 'createProductInfo'])->name('products.create_product_info');
    Route::get('products/get_sub_items', [Supplier\ProductController::class, 'getSubItems']);
    Route::resource('products', Supplier\ProductController::class);

    


});
////////// END SUPPLIER

// Route::get('/', function () {
//     $lang = App::getLocale(); //??????????????????????????????????????? en???????????? config
//     // return redirect("/$lang");
//     return view('welcome');
// });
Route::get('/', function () {return view('home');})->name('frontend.index');
Route::get('/request', function () {return view('request');})->name('frontend.request');
Route::get('/promotion', function () {return view('promotion');})->name('frontend.promotion');
Route::get('/articles', function () {return view('articles');})->name('frontend.articles');
Route::get('/contactus', function () {return view('contactus');})->name('frontend.contactus');
Route::get('/articles-content', function () {return view('articles-content');})->name('frontend.articlecontent');

Route::get('set/lang/{lang}', function ($lang) {
    Session::put('lang', $lang);
    return Redirect::back();
});
Route::get('import/category', [ImportdataController::class,'category']);
Route::post('import/category', [ImportdataController::class,'importcategory']);

Route::get('import/categorysub', [ImportdataController::class,'categorysub']);
Route::post('import/categorysub', [ImportdataController::class,'importcategorysub']);

Route::get('import/categorysubs', [ImportdataController::class,'categorysubs']);
Route::post('import/categorysubs', [ImportdataController::class,'importcategorysubs']);

Route::get('import/brand', [ImportdataController::class,'brand']);
Route::post('import/brand', [ImportdataController::class,'importbrand']);

Route::get('import/brandmodel', [ImportdataController::class,'brandmodel']);
Route::post('import/brandmodel', [ImportdataController::class,'importbrandmodel']);

Route::get('import/brandmodels', [ImportdataController::class,'brandmodels']);
Route::post('import/brandmodels', [ImportdataController::class,'importbrandmodels']);

Route::get('import/brandyear', [ImportdataController::class,'brandyear']);
Route::post('import/brandyear', [ImportdataController::class,'importbrandyear']);
// Auth::routes();

// Route::get('/chat', [ChatsController::class, 'index']);
// Route::get('messages', [ChatsController::class, 'fetchMessages']);
// Route::post('messages', [ChatsController::class, 'sendMessage'])->name('messages');

// login google
Route::get('google/login', [SocialController::class, 'redirectToGoogle'])->name('google.login');
Route::get('google/callback', [SocialController::class, 'handleCallback'])->name('google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/clearcache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('supplier/profile', [Supplier\ProfileController::class,'index'])->name('supplier.profile');
Route::get('supplier/profile/edit', [Supplier\ProfileController::class,'edit'])->name('supplier.profile.edit');
Route::post('supplier/profile/update', [Supplier\ProfileController::class,'update'])->name('supplier.profile.update');

Route::get('changeprovinces/{id}', [Backend\CompanyController::class,'provinces']);
Route::get('changeamphures/{id}', [Backend\CompanyController::class,'amphures']);
Route::get('changedistricts/{id}', [Backend\CompanyController::class,'districts']);

Route::get('supplier/profile/store', [Supplier\ProfileController::class,'storeindex'])->name('supplier.profile.store');
Route::get('supplier/profile/store/edit', [Supplier\ProfileController::class,'storeedit'])->name('supplier.profile.store.edit');
Route::post('supplier/profile/store/update', [Supplier\ProfileController::class,'storeupdate'])->name('supplier.profile.store.update');
Route::post('supplier/profile/legal/store/update', [Supplier\ProfileController::class,'legalstoreupdate'])->name('supplier.profile.legal.store.update');
Route::post('supplier/profile/store/verify/update', [Supplier\ProfileController::class,'storeverifyupdate'])->name('supplier.profile.store.verify.update');


Route::get('supplier/profile/bank', [Supplier\ProfileController::class,'bankindex'])->name('supplier.profile.bank');
Route::get('supplier/profile/bank/add', [Supplier\ProfileController::class,'bankadd'])->name('supplier.profile.bank.add');
Route::post('supplier/profile/bank/store', [Supplier\ProfileController::class,'bankstore'])->name('supplier.profile.bank.store');

Route::get('supplier/profile/setting', [Supplier\ProfileController::class,'settingindex'])->name('supplier.profile.setting');
Route::post('supplier/profile/setting/role/add', [Supplier\ProfileController::class,'settingrolestore'])->name('supplier.profile.setting.role.add');
Route::post('supplier/profile/setting/user/add', [Supplier\ProfileController::class,'settinguserstore'])->name('supplier.profile.setting.user.store');
Route::get('supplier/profile/setting/user/changepermission', [Supplier\ProfileController::class,'changepermission'])->name('supplier.profile.setting.user.changepermission');
Route::get('supplier/profile/setting/user/searchrole', [Supplier\ProfileController::class,'searchrole'])->name('supplier.profile.setting.user.searchrole');

Route::get('supplier/profile/notification', [Supplier\ProfileController::class,'notificationindex'])->name('supplier.profile.notification');


Route::get('supplier/requests', [Supplier\RequestsController::class,'index'])->name('supplier.requests');
Route::get('supplier/requests/view/{id}', [Supplier\RequestsController::class,'view'])->name('supplier.requests.view');
Route::get('supplier/requests/details/{id}', [Supplier\RequestsController::class,'details'])->name('supplier.requests.details');
Route::get('supplier/requests/offer/{id}', [Supplier\RequestsController::class,'offer'])->name('supplier.requests.offer');



// Route::get('supplier/profile', [Supplier\ProfileController::class,'index'])->name('supplier.profile.noti');
require __DIR__.'/auth.php';
