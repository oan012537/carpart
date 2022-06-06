<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer as Buyer;
use App\Http\Controllers\Supplier as Supplier;
use App\Http\Controllers\Backend as Backend;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ChatsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('buyer/regis-buy', [Buyer\buyerController::class, 'regis_buyer']);
Route::post('buyer/regis-buy-post', [Buyer\buyerController::class, 'regis_buyer_post'])->name('step1');

Route::get('buyer/regiscon-buy', [Buyer\buyerController::class, 'regiscon_buyer']);
Route::post('buyer/regiscon-buy-post', [Buyer\buyerController::class, 'regiscon_buyer_post'])->name('step2');

Route::get('buyer/registerpass-buy', [Buyer\buyerController::class, 'registerpass_buyer']);
Route::post('buyer/registerpass-buy-post', [Buyer\buyerController::class, 'registerpass_buyer_post'])->name('step3');

////////// END BUYER  ///////////////////////////////////////////////////////////////////////////////////////////////////////

/////////// SUPPLIER ///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Login
Route::get('supplier/login', [Supplier\Auth\SupplierAuthController::class,'index'])->name('supplier.login');
Route::get('supplier/login-sup', [Supplier\supplierController::class, 'login_supplier'])->name('supplier');
Route::get('supplier/logphone-sup', [Supplier\supplierController::class, 'logphone_supplier']);
Route::get('supplier/logotp-sup', [Supplier\supplierController::class, 'logotp_supplier']);

//Register
Route::get('supplier/regis-sup', [Supplier\supplierController::class, 'regis_supplier']);
Route::get('supplier/regisphone-sup', [Supplier\supplierController::class, 'regisphone_supplier']);
Route::get('supplier/regisotp-sup', [Supplier\supplierController::class, 'regisotp_supplier']);
Route::get('supplier/register-sup', [Supplier\supplierController::class, 'register_supplier']);

////////// END SUPPLIER  

// Route::get('/', function () {
//     $lang = App::getLocale(); //ดึงภาษาตอนแรก enตามน config
//     // return redirect("/$lang");
//     return view('welcome');
// });
Route::get('/', function () {return view('home');})->name('frontend.index');
Route::get('/request', function () {return view('request');})->name('frontend.request');
Route::get('/promotion', function () {return view('promotion');})->name('frontend.promotion');
Route::get('/articles', function () {return view('articles');})->name('frontend.articles');
Route::get('/contactus', function () {return view('contactus');})->name('frontend.contactus');
Route::get('/articles-content', function () {return view('articles-content');})->name('frontend.articlecontent');

Route::get('setlang/{lang}', function ($lang) {
    Session::put('lang', $lang);
    return Redirect::back();
});
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


require __DIR__.'/auth.php';
