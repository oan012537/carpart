<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Buyer\RequestSparesController;
use App\Http\Controllers\Supplier\Auth\SupplierAuthController;
use App\Http\Controllers\Supplier\ProfileController;
use App\Http\Controllers\Supplier\RequestsController;
use App\Http\Controllers\Supplier\ProductController;
use App\Http\Controllers\Backend as Backend;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\ImportdataController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\cFunction;
use App\Http\Controllers\LanguageController;


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


// supplier module
Route::group(['prefix' => 'supplier'], function() {
    
    Route::get('/login', [SupplierAuthController::class, 'index'])->name('supplier.index');
    Route::post('/login/owner', [SupplierAuthController::class, 'login'])->name('supplier.login');
    Route::post('/logout', [SupplierAuthController::class, 'logout'])->name('supplier.logout')->middleware('supplier');
    Route::get('/register', [SupplierAuthController::class, 'register'])->name('supplier.register');
    Route::post('/register/create', [SupplierAuthController::class, 'store'])->name('supplier.register.store');    
    Route::get('sms-confirm', [SupplierAuthController::class, 'smsConfirm'])->name('supplier.register.smsConfirm');
    Route::get('verify-otp', [SupplierAuthController::class, 'verifyOtp'])->name('supplier.register.verifyOtp');
    Route::get('request-otp', [SupplierAuthController::class, 'requestOtp'])->name('supplier.register.requestOtp');
    Route::post('confirm-otp', [SupplierAuthController::class, 'confirmOtp'])->name('supplier.register.confirmOtp');
    Route::get('supplier-info', [SupplierAuthController::class, 'supplierInfo'])->name('supplier.register.supplierInfo');
    Route::get('contact-info', [SupplierAuthController::class, 'contactInfo'])->name('supplier.register.contactInfo');
    Route::get('bank-info', [SupplierAuthController::class, 'bankInfo'])->name('supplier.register.bankInfo');
    Route::get('create-password', [SupplierAuthController::class, 'createPassword'])->name('supplier.register.createPassword');
    Route::post('store-password', [SupplierAuthController::class, 'storePassword'])->name('supplier.register.storePassword');
    Route::post('register/upload-file', [SupplierAuthController::class, 'uploadFile'])->name('supplier.register.uploadFile');
    Route::post('register/remove-file', [SupplierAuthController::class, 'removeFile'])->name('supplier.register.removeFile');

    Route::get('get_address', [SupplierAuthController::class, 'getAddress'])->name('get_address');

    // impliment product controller
    Route::post('products/dropzone/store', [ProductController::class, 'dropzoneStore'])->name('dropzone.store')->middleware('supplier');
    Route::post('products/dropzone/remove', [ProductController::class, 'dropzoneRemove'])->name('dropzone.remove')->middleware('supplier');

    Route::get('products/create_product_info', [ProductController::class, 'createProductInfo'])->name('products.create_product_info')->middleware('supplier');
    Route::get('products/get_sub_items', [ProductController::class, 'getSubItems'])->middleware('supplier');
    Route::get('products/copy-product/{id}', [ProductController::class, 'copyProduct'])->name('supplier.product.copyProduct')->middleware('supplier');
    // Route::post('products/product-data', [ProductController::class, 'productData'])->name('supplier.products.productData')->middleware('supplier');
    Route::resource('products', ProductController::class)->middleware('supplier');
    
    // supplier profile
    Route::get('profile', [ProfileController::class,'index'])->name('supplier.profile')->middleware('supplier');
    Route::get('profile/edit', [ProfileController::class,'edit'])->name('supplier.profile.edit')->middleware('supplier');
    Route::post('profile/update', [ProfileController::class,'update'])->name('supplier.profile.update')->middleware('supplier');

    Route::get('profile/store', [ProfileController::class,'storeindex'])->name('supplier.profile.store')->middleware('supplier');
    Route::get('profile/store/edit', [ProfileController::class,'storeedit'])->name('supplier.profile.store.edit')->middleware('supplier');
    Route::post('profile/store/update', [ProfileController::class,'storeupdate'])->name('supplier.profile.store.update')->middleware('supplier');
    Route::post('profile/legal/store/update', [ProfileController::class,'legalstoreupdate'])->name('supplier.profile.legal.store.update')->middleware('supplier');
    Route::post('profile/store/verify/update', [ProfileController::class,'storeverifyupdate'])->name('supplier.profile.store.verify.update')->middleware('supplier');

    Route::get('profile/bank', [ProfileController::class,'bankindex'])->name('supplier.profile.bank')->middleware('supplier');
    Route::get('profile/bank/add', [ProfileController::class,'bankadd'])->name('supplier.profile.bank.add')->middleware('supplier');
    Route::post('profile/bank/store', [ProfileController::class,'bankstore'])->name('supplier.profile.bank.store')->middleware('supplier');

    Route::get('profile/setting', [ProfileController::class,'settingindex'])->name('supplier.profile.setting')->middleware('supplier');
    Route::post('profile/setting/role/add', [ProfileController::class,'settingrolestore'])->name('supplier.profile.setting.role.add')->middleware('supplier');
    Route::post('profile/setting/user/add', [ProfileController::class,'settinguserstore'])->name('supplier.profile.setting.user.store')->middleware('supplier');
    Route::get('profile/setting/user/changepermission', [ProfileController::class,'changepermission'])->name('supplier.profile.setting.user.changepermission')->middleware('supplier');
    Route::get('profile/setting/user/searchrole', [ProfileController::class,'searchrole'])->name('supplier.profile.setting.user.searchrole')->middleware('supplier');

    Route::get('supplier/profile/notification', [ProfileController::class,'notificationindex'])->name('supplier.profile.notification')->middleware('supplier');

    Route::get('requests', [RequestsController::class,'index'])->name('supplier.requests')->middleware('supplier');
    Route::get('requests/view/{id}', [RequestsController::class,'view'])->name('supplier.requests.view')->middleware('supplier');
    Route::get('requests/details/{id}', [RequestsController::class,'details'])->name('supplier.requests.details')->middleware('supplier');
    Route::get('requests/offer/{id}', [RequestsController::class,'offer'])->name('supplier.requests.offer')->middleware('supplier');

    

    // Route::get('/profile', [SupplierController::class, 'SellerDashboard'])->name('supplier.profile')->middleware('supplier');
});

// buyer module
/*Route::group(['prefix' => 'buyer'], function () {

    Route::get('login-buy', [BuyerController::class, 'login_buyer']);
    Route::post('login-buy-post', [BuyerController::class, 'login_buyer_post'])->name('buyer.login');
    Route::get('logout-buy', [BuyerController::class, 'logout_buyer']);
    Route::get('regis', [BuyerController::class, 'regis']);
    Route::post('regis-post', [BuyerController::class, 'regis_post'])->name('pdpa');
    Route::get('regis-buy', [BuyerController::class, 'regis_buyer']);
    Route::post('regis-buy-post', [BuyerController::class, 'regis_buyer_post'])->name('step1');
    Route::get('regiscon-buy', [BuyerController::class, 'regiscon_buyer']);
    Route::post('regiscon-buy-post', [BuyerController::class, 'regiscon_buyer_post'])->name('step2');
    Route::get('registerpass-buy', [BuyerController::class, 'registerpass_buyer']);
    Route::post('registerpass-buy-post', [buyerController::class, 'registerpass_buyer_post'])->name('step3');

    Route::get('requestspares', [RequestSparesController::class, 'index'])->name('buyer.requestspares')->middleware('buyer');
    Route::get('requestspares/add', [RequestSparesController::class, 'add'])->name('buyer.requestspares.add')->middleware('buyer');
    Route::post('requestspares/add', function () {
    })->name('buyer.requestspares.store')->middleware('buyer');

    Route::get('buyer/requestspares/view', [RequestSparesController::class, 'view'])->name('buyer.requestspares.view')->middleware('buyer');
    Route::get('buyer/requestspares/details', [RequestSparesController::class, 'details'])->name('buyer.requestspares.details')->middleware('buyer');

    Route::get('buyer/home-search', [BuyerController::class, 'home_search'])->name('buyer.home-search')->middleware('buyer');
});*/

Route::get('language_switch/{locale}', [LanguageController::class, 'switchLanguage'])->middleware('supplier');


Route::get('/', function () {
    return view('home');
})->name('frontend.index');
Route::get('/request', function () {
    return view('request');
})->name('frontend.request');
Route::get('/promotion', function () {
    return view('promotion');
})->name('frontend.promotion');
Route::get('/articles', function () {
    return view('articles');
})->name('frontend.articles');
Route::get('/contactus', function () {
    return view('contactus');
})->name('frontend.contactus');
Route::get('/articles-content', function () {
    return view('articles-content');
})->name('frontend.articlecontent');

Route::get('import/category', [ImportdataController::class, 'category']);
Route::post('import/category', [ImportdataController::class, 'importcategory']);

Route::get('import/categorysub', [ImportdataController::class, 'categorysub']);
Route::post('import/categorysub', [ImportdataController::class, 'importcategorysub']);

Route::get('import/categorysubs', [ImportdataController::class, 'categorysubs']);
Route::post('import/categorysubs', [ImportdataController::class, 'importcategorysubs']);

Route::get('import/brand', [ImportdataController::class, 'brand']);
Route::post('import/brand', [ImportdataController::class, 'importbrand']);

Route::get('import/brandmodel', [ImportdataController::class, 'brandmodel']);
Route::post('import/brandmodel', [ImportdataController::class, 'importbrandmodel']);

Route::get('import/brandmodels', [ImportdataController::class, 'brandmodels']);
Route::post('import/brandmodels', [ImportdataController::class, 'importbrandmodels']);

Route::get('import/brandyear', [ImportdataController::class, 'brandyear']);
Route::post('import/brandyear', [ImportdataController::class, 'importbrandyear']);

// Route::get('/chat', [ChatsController::class, 'index']);
// Route::get('messages', [ChatsController::class, 'fetchMessages']);
// Route::post('messages', [ChatsController::class, 'sendMessage'])->name('messages');

// login google
Route::get('google/login', [SocialController::class, 'redirectToGoogle'])->name('google.login');
Route::get('google/callback', [SocialController::class, 'handleCallback'])->name('google.callback');

Route::get('changeprovinces/{id}', [DataprovincesController::class, 'provinces']);
Route::get('changeamphures/{id}', [DataprovincesController::class, 'amphures']);
Route::get('changedistricts/{id}', [DataprovincesController::class, 'districts']);

// OAT เพราะไม่ต้องการแก้ไขของเดิม
Route::get('fetchamphures/{id}', [DataprovincesController::class, 'fetchamphures']);
Route::get('fetchdistricts/{id}', [DataprovincesController::class, 'fetchdistricts']);
Route::get('fetchzipcode/{id}', [DataprovincesController::class, 'fetchzipcode']);


Route::get('/clearcache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
