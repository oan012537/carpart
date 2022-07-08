<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer as Buyer;
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
// Route::get('buyer/login-buy', [Buyer\buyerController::class, 'login_buyer']);
// Route::get('/buyer/login-buyer', 'App\Http\Controllers\Buyer\buyerController@login_buyer');

/////////// BUYER ///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('buyer/login-buy', [Buyer\BuyerController::class, 'login_buyer']);
Route::post('buyer/login-buy-post', [Buyer\BuyerController::class, 'login_buyer_post'])->name('buyer.login');
Route::get('buyer/logout-buy', [Buyer\BuyerController::class, 'logout_buyer']);
Route::get('buyer/regis', [Buyer\BuyerController::class, 'regis']);
Route::post('buyer/regis', [Buyer\BuyerController::class, 'regis_post'])->name('pdpa');
Route::get('buyer/regis-buy', [Buyer\BuyerController::class, 'regis_buyer']);
Route::post('buyer/regis-buy-post', [Buyer\BuyerController::class, 'regis_buyer_post'])->name('step1');
Route::get('buyer/regiscon-buy', [Buyer\BuyerController::class, 'regiscon_buyer']);
Route::post('buyer/regiscon-buy-post', [Buyer\BuyerController::class, 'regiscon_buyer_post'])->name('step2');
Route::get('buyer/registerpass-buy', [Buyer\BuyerController::class, 'registerpass_buyer']);
Route::post('buyer/registerpass-buy-post', [Buyer\BuyerController::class, 'registerpass_buyer_post'])->name('step3');

Route::get('buyer/requestspares', [Buyer\RequestSparesController::class, 'index'])->name('buyer.requestspares');
Route::get('buyer/requestspares/add', [Buyer\RequestSparesController::class, 'add'])->name('buyer.requestspares.add');
Route::post('buyer/requestspares/add', function(){})->name('buyer.requestspares.store');

Route::get('buyer/requestspares/view', [Buyer\RequestSparesController::class, 'view'])->name('buyer.requestspares.view');
Route::get('buyer/requestspares/details', [Buyer\RequestSparesController::class, 'details'])->name('buyer.requestspares.details');



Route::group(['middleware' => ['buyer']], function () {
    Route::get('buyer/home-search', [Buyer\BuyerController::class, 'home_search'])->name('buyer.home-search');
    Route::post('buyer/search-product', [Buyer\BuyerController::class, 'search_product']);

    //Ajax
    Route::get('buyer/filterBrands/{id}', [Buyer\BuyerController::class, 'filterBrands']);
    Route::get('buyer/searchBrands/{id}', [Buyer\BuyerController::class, 'searchBrands']);
    Route::get('buyer/GetModel/{id}', [Buyer\BuyerController::class, 'GetModel']);
    Route::get('buyer/GetsubModel/{id}', [Buyer\BuyerController::class, 'GetsubModel']);
    Route::get('buyer/GetYear/{id}', [Buyer\BuyerController::class, 'GetYear']);
    Route::get('buyer/GetYearID/{id}', [Buyer\BuyerController::class, 'GetYearID']);
    Route::get('buyer/GetsubCategory/{id}', [Buyer\BuyerController::class, 'GetsubCategory']);
    Route::get('buyer/GetSubsubCategory/{id}', [Buyer\BuyerController::class, 'GetSubsubCategory']);
});