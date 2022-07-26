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

Route::prefix('buyer')->group(function(){

    Route::get('login-buy', [Buyer\BuyerController::class, 'login_buyer']);
    Route::post('login-buy-post', [Buyer\BuyerController::class, 'login_buyer_post'])->name('buyer.login');
    Route::post('login/phone', [Buyer\BuyerController::class, 'loginphone'])->name('buyer.login.confirmphone');
    Route::get('login/gettoken', [Buyer\BuyerController::class, 'logingettoken'])->name('buyer.login.gettoken');
    Route::post('login/confirmotp', [Buyer\BuyerController::class, 'loginconfirmotp'])->name('buyer.login.confirmotp');
    Route::post('login/success', [Buyer\BuyerController::class, 'loginsuccess'])->name('buyer.login.success');
    Route::get('logout-buy', [Buyer\BuyerController::class, 'logout_buyer']);
    Route::get('regis', [Buyer\BuyerController::class, 'regis']);
    Route::post('regis', [Buyer\BuyerController::class, 'regis_post'])->name('pdpa');
    Route::get('register/phone', [Buyer\BuyerController::class, 'registerphone'])->name('buyer.register.phone');
    Route::post('register/phone', [Buyer\BuyerController::class, 'confirmphone'])->name('buyer.register.confirmphone');
    Route::post('register/confirmotp', [Buyer\BuyerController::class, 'confirmotp'])->name('buyer.register.confirmotp');
    Route::post('register/member', [Buyer\BuyerController::class, 'regis_buyer'])->name('buyer.register.member');
    Route::get('regis-buy', [Buyer\BuyerController::class, 'regis_buyer']);
    Route::post('regis-buy-post', [Buyer\BuyerController::class, 'regis_buyer_post'])->name('step1');
    Route::get('regiscon-buy', [Buyer\BuyerController::class, 'regiscon_buyer']);
    Route::post('regiscon-buy-post', [Buyer\BuyerController::class, 'regiscon_buyer_post'])->name('step2');
    Route::get('registerpass-buy', [Buyer\BuyerController::class, 'registerpass_buyer']);
    Route::post('registerpass-buy-post', [Buyer\BuyerController::class, 'registerpass_buyer_post'])->name('step3');
    Route::get('register/password', [Buyer\BuyerController::class, 'createpassword']);

    // Route::get('requestspares', [Buyer\RequestSparesController::class, 'index'])->name('buyer.requestspares');
    Route::get('requestspares/add', [Buyer\RequestSparesController::class, 'add'])->name('buyer.requestspares.add');
    Route::post('requestspares/add', function(){})->name('buyer.requestspares.store');

    Route::get('requestspares/view', [Buyer\RequestSparesController::class, 'view'])->name('buyer.requestspares.view');
    Route::get('requestspares/details', [Buyer\RequestSparesController::class, 'details'])->name('buyer.requestspares.details');



    Route::group(['middleware' => ['buyer']], function () {
        // ======== Homesearch ========== Tontal
        Route::get('home-search', [Buyer\SearchProductController::class, 'home_search'])->name('buyer.home-search');
        Route::post('search-product', [Buyer\SearchProductController::class, 'search_product']);
        Route::get('home-search2',[Buyer\SearchProductController::class, 'home_search_brand'])->name('buyer.home-search2');
        Route::get('home-search3',[Buyer\SearchProductController::class, 'home_search_model'])->name('buyer.home-search3');
        Route::get('home-search4',[Buyer\SearchProductController::class, 'home_search_submodel'])->name('buyer.home-search4');
        Route::get('home-search5',[Buyer\SearchProductController::class, 'home_search_year'])->name('buyer.home-search5');
        Route::get('home-search6',[Buyer\SearchProductController::class, 'home_search_category'])->name('buyer.home-search6');
        Route::get('home-search7',[Buyer\SearchProductController::class, 'home_search_subcategory'])->name('buyer.home-search7');

    //======= OAT My Account =======

        //== ** Profile 
        Route::get('myaccount', [Buyer\Myaccount\BuyerProfileController::class, 'index'])->name('buyer.account'); //-OAT
        // Profile Address
        Route::post('buyerprofile/add', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_store']); //-OAT
        Route::get('buyerprofile/edit/{id}', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_edit']); //-OAT
        Route::post('buyerprofile/update', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_update']); //-OAT
        Route::get('buyerprofile/delete/{id}', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_delete']); //-OAT
        Route::get('buyerprofile/set_isprofile/{id}', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_set_isprofile']); //-OAT
        Route::get('buyerprofile/set_isdelivery/{id}', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_set_isdelivery']); //-OAT
        Route::post('buyerprofile/account/update', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_account_update']); //-OAT
        
        // Taxinvoice
        Route::get('buyerprofile/taxinvoice/edit/{id}', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_taxinvoice_edit']); //-OAT
        Route::post('buyerprofile/taxinvoice/update', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_taxinvoice_update']); //-OAT
       
        // Change Password
        Route::get('buyerprofile/changepassword/check_currentpassword/{current_password}', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_check_currentpassword']); //-OAT
       
        //== SocialMedia
        Route::get('buyerprofile/socialmedia/disconnect/{type}', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_socialmedia_disconnect']); //-OAT

        // Insert Bank
        Route::get('buyerprofile/bank/request_otp', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_bank_request_otp']); //-OAT
        Route::post('buyerprofile/bank/create', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_bank_store']); //-OAT
        Route::get('buyerprofile/bank/setdefault/{id}', [Buyer\Myaccount\BuyerProfileController::class, 'buyerprofile_bank_set_default']); //-OAT
        //== ** End Profile 

        //== ** Comfirm Inventory
        Route::get('myaccount/confirminventory', [Buyer\Myaccount\MyConfirmInventoryController::class, 'index']); //-OAT
        Route::get('myaccount/confirminventory/confirmapproved/show/{id}', [Buyer\Myaccount\MyConfirmInventoryController::class, 'confirmapproved_show']); //-OAT

        //== ** End Comfirm Inventory


    //======= OAT End My Account ======= 

        //======= OAT Comfirm Inventory ===========
        Route::get('confirminventory/{id}', [Buyer\ConfirmInventoryController::class, 'confirminventory']); //-OAT
        Route::post('confirminventory', [Buyer\ConfirmInventoryController::class, 'confirminventory_store']); //-OAT
        //======= OAT End Comfirm Inventory =======
    });

    //======================= Ajax ==========================
    Route::get('filterBrands/{id}', [Buyer\SearchProductController::class, 'filterBrands']);
    Route::get('searchBrands/{id}', [Buyer\SearchProductController::class, 'searchBrands']);
    
    Route::get('SearchBox', [Buyer\SearchProductController::class, 'searchBox']);
    Route::get('GetModel/{id}', [Buyer\SearchProductController::class, 'GetModel']);
    Route::get('GetsubModel/{id}', [Buyer\SearchProductController::class, 'GetsubModel']);
    Route::get('GetYear/{id}', [Buyer\SearchProductController::class, 'GetYear']);
    Route::get('GetYearID/{id}', [Buyer\SearchProductController::class, 'GetYearID']);
    Route::get('GetsubCategory/{id}', [Buyer\SearchProductController::class, 'GetsubCategory']);
    Route::get('GetSubsubCategory/{id}', [Buyer\SearchProductController::class, 'GetSubsubCategory']);

    // Route::post('GetsearchBox',[Buyer\SearchProductController::class, 'Getsearch']);
    Route::get('fetch_amphur/{id}', [Buyer\BuyerController::class, 'GetsubCategory']);
});




// ========== Product Detail ================

Route::get('product/{productname}/{id}', [Buyer\ProductDetailController::class, 'index']); //-OAT
Route::get('productbookmark/{id}', [Buyer\ProductDetailController::class, 'product_bookmark']); //-OAT Ajax

// ========== Product Detail ================

