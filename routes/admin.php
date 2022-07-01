<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend as Backend;
use App\Models\User;
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
// Route::get('register/page2', function(){})->name('backend.register.otp');
Route::get('backend/login', [Backend\BackendController::class,'index'])->name('backend.login.index');
Route::post('backend/login', [Backend\BackendController::class,'login'])->name('backend.login');
Route::get('backend/register', [Backend\BackendController::class,'register'])->name('backend.register');
Route::post('backend/register', [Backend\BackendController::class,'store'])->name('backend.register.store');

Route::group(['middleware' => 'auth'], function(){
    Route::prefix('backend')->group(function () {
        Route::get('logout', [Backend\BackendController::class, 'logout'])->name('backend.logout');
        Route::get('setlang/{lang}', function ($lang) {
            Session::put('lang', $lang);
            $update = User::find(Auth::guard('web')->user()->id);
            $update->lang = $lang;
            $update->save();
            return Redirect::back();
        });
        Route::get('/', [Backend\DashboardController::class,'index'])->name('backend.dashboard');
        Route::get('/dashboard', [Backend\DashboardController::class,'index'])->name('backend.dashboard.index');
        
        Route::prefix('register')->group(function () {
            Route::get('add', function(){});
            Route::post('store', function(){});
            Route::get('edit', function(){});
            Route::post('update', function(){});
        });

        Route::prefix('company')->group(function () {
            Route::get('/', [Backend\CompanyController::class,'index'])->name('backend.company');
            Route::get('add', function(){})->name('backend.company.add');
            Route::post('store', function(){})->name('backend.company.store');
            Route::get('edit', [Backend\CompanyController::class,'edit'])->name('backend.company.edit');
            Route::post('update', [Backend\CompanyController::class,'update'])->name('backend.company.update');
            Route::get('changeprovinces/{id}', [Backend\CompanyController::class,'provinces']);
            Route::get('changeamphures/{id}', [Backend\CompanyController::class,'amphures']);
            Route::get('changedistricts/{id}', [Backend\CompanyController::class,'districts']);
        });

        Route::prefix('settinguser')->group(function () {
            Route::get('/', [Backend\SettinguserController::class,'index'])->name('backend.setting.user');
            Route::get('add', [Backend\SettinguserController::class,'add'])->name('backend.setting.user.add');
            Route::post('store', [Backend\SettinguserController::class,'store'])->name('backend.setting.user.store');
            Route::get('edit/{id}', [Backend\SettinguserController::class,'edit'])->name('backend.setting.user.edit');
            Route::post('update', [Backend\SettinguserController::class,'update'])->name('backend.setting.user.update');
            Route::get('destroy', [Backend\SettinguserController::class,'destroy'])->name('backend.setting.user.destroy');

            Route::get('changestatus', [Backend\SettinguserController::class,'changestatus']);

            Route::post('addrole', [Backend\SettinguserController::class,'addrole'])->name('backend.setting.user.role.add');
            Route::get('changepermission', [Backend\SettinguserController::class,'changepermission'])->name('backend.setting.user.changepermission');

            Route::get('searchrole', [Backend\SettinguserController::class,'searchrole'])->name('backend.setting.user.role.searchrole');

        });

        Route::prefix('approvalrequest')->group(function () {
            Route::prefix('individual')->group(function () {
                Route::get('/', [Backend\ApprovalRequestIndividualController::class,'index'])->name('backend.approval.individual');
                Route::get('datatables', [Backend\ApprovalRequestIndividualController::class,'datatables'])->name('backend.approval.individual.datatables');
                Route::get('datatables/wait', [Backend\ApprovalRequestIndividualController::class,'datatables_wait'])->name('backend.approval.individual.datatables.wait');
                Route::get('datatables/approval', [Backend\ApprovalRequestIndividualController::class,'datatables_approval'])->name('backend.approval.individual.datatables.approval');
                Route::get('datatables/disapproved', [Backend\ApprovalRequestIndividualController::class,'datatables_disapproved'])->name('backend.approval.individual.datatables.disapproved');
                
                Route::get('add', [Backend\ApprovalRequestIndividualController::class,'add'])->name('backend.approval.individual.add');
                Route::post('store', [Backend\ApprovalRequestIndividualController::class,'store'])->name('backend.approval.individual.store');
                Route::get('edit/{id}', [Backend\ApprovalRequestIndividualController::class,'edit'])->name('backend.approval.individual.edit');
                Route::post('update', [Backend\ApprovalRequestIndividualController::class,'update'])->name('backend.approval.individual.update');
                Route::get('destroy', [Backend\ApprovalRequestIndividualController::class,'destroy'])->name('backend.approval.individual.destroy');

                Route::get('changestatus', [Backend\ApprovalRequestIndividualController::class,'changestatus']);

                Route::post('addrole', [Backend\ApprovalRequestIndividualController::class,'addrole'])->name('backend.approval.individual.role.add');

                Route::get('getdetails', [Backend\ApprovalRequestIndividualController::class,'getdetails'])->name('backend.approval.individual.getdetails');
            });

            Route::prefix('legal')->group(function () {
                Route::get('/', [Backend\ApprovalRequestLegalController::class,'index'])->name('backend.approval.legal');
                Route::get('add', [Backend\ApprovalRequestLegalController::class,'add'])->name('backend.approval.legal.add');
                Route::get('datatables', [Backend\ApprovalRequestLegalController::class,'datatables'])->name('backend.approval.legal.datatables');
                Route::get('datatables/wait', [Backend\ApprovalRequestLegalController::class,'datatables_wait'])->name('backend.approval.legal.datatables');
                Route::get('datatables/approval', [Backend\ApprovalRequestLegalController::class,'datatables_approval'])->name('backend.approval.legal.datatables');
                Route::get('datatables/disapproved', [Backend\ApprovalRequestLegalController::class,'datatables_disapproved'])->name('backend.approval.legal.datatables.disapproved');
                
                Route::post('store', [Backend\ApprovalRequestLegalController::class,'store'])->name('backend.approval.legal.store');
                Route::get('edit/{id}', [Backend\ApprovalRequestLegalController::class,'edit'])->name('backend.approval.legal.edit');
                Route::post('update', [Backend\ApprovalRequestLegalController::class,'update'])->name('backend.approval.legal.update');
                Route::get('destroy', [Backend\ApprovalRequestLegalController::class,'destroy'])->name('backend.approval.legal.destroy');

                Route::get('changestatus', [Backend\ApprovalRequestLegalController::class,'changestatus']);

                Route::post('approve', [Backend\ApprovalRequestLegalController::class,'approval'])->name('backend.approval.legal.approve');

                Route::get('getdetails', [Backend\ApprovalRequestLegalController::class,'getdetails'])->name('backend.approval.legal.getdetails');

            });
        });

        Route::prefix('requestspares')->group(function () {
            Route::get('/', [Backend\RequestSparesController::class,'index'])->name('backend.requestspares');
            Route::get('view/{id}', [Backend\RequestSparesController::class,'view'])->name('backend.requestspares.view');
            Route::get('details/{id}', [Backend\RequestSparesController::class,'details'])->name('backend.requestspares.details');
            Route::post('update', [Backend\RequestSparesController::class,'update'])->name('backend.requestspares.update');
        });

        Route::prefix('manageproduct')->group(function () {
            Route::get('/', [Backend\ProductController::class,'index'])->name('backend.product');
            Route::get('edit/{id}', [Backend\ProductController::class,'edit'])->name('backend.product.edit');
            Route::post('update', [Backend\ProductController::class,'update'])->name('backend.product.update');
        });

        Route::prefix('settingcategory')->group(function () {
            Route::get('/', [Backend\CategoryController::class,'index'])->name('backend.category');
            Route::get('add', function(){})->name('backend.category.add');
            Route::post('store', function(){})->name('backend.category.store');
            Route::post('update', [Backend\CategoryController::class,'update'])->name('backend.category.update');
            Route::post('updatesub', [Backend\CategoryController::class,'updatesub'])->name('backend.categorysub.update');
            Route::post('updatesubs', [Backend\CategoryController::class,'updatesubs'])->name('backend.categorysubs.update');
        });

        Route::prefix('settingbrand')->group(function () {
            Route::get('/', [Backend\BrandController::class,'show'])->name('backend.brand');
            Route::get('edit', [Backend\BrandController::class,'index'])->name('backend.brand.edit');
            Route::post('store', function(){})->name('backend.brand.store');
            // Route::get('edit', [Backend\BrandController::class,'edit'])->name('backend.brand.edit');
            Route::post('update', [Backend\BrandController::class,'update'])->name('backend.brand.update');
            Route::post('updatemodel', [Backend\BrandController::class,'updatemodel'])->name('backend.brandmodel.update');
            Route::post('updatemodelsub', [Backend\BrandController::class,'updatemodelsub'])->name('backend.brandmodelsub.update');
            Route::post('updateyear', [Backend\BrandController::class,'updateyear'])->name('backend.brandyear.update');

            Route::get('getbrandmodel', [Backend\BrandController::class,'getbrandmodel'])->name('backend.brand.getbrandmodel');
            Route::get('getbrandmodelsub', [Backend\BrandController::class,'getbrandmodelsub'])->name('backend.brand.getbrandmodelsub');
            Route::get('getbrandmodelyear', [Backend\BrandController::class,'getbrandmodelyear'])->name('backend.brand.getbrandmodelyear');

            Route::get('changeactive', [Backend\BrandController::class,'changeactive'])->name('backend.brand.changeactive');
            Route::get('datatables', [Backend\BrandController::class,'datatables'])->name('backend.settingbrand.datatables');
            
        });

        // Route::get('settingmanufac', [Backend\BrandController::class,'settingmanufac'])->name('backend.settingmanufac');
        

        Route::prefix('orderlist')->group(function () {
            Route::get('/', [Backend\OrderlistController::class,'index'])->name('backend.orderlist');
            Route::get('unpaid/details/{id}', [Backend\OrderlistController::class,'unpaiddetails'])->name('backend.orderlist.unpaid');
            Route::get('delivered/details/{id}', [Backend\OrderlistController::class,'delivereddetails'])->name('backend.orderlist.delivered');
            Route::get('shipping/details/{id}', [Backend\OrderlistController::class,'shippingdetails'])->name('backend.orderlist.shipping');
            Route::get('received/details/{id}', [Backend\OrderlistController::class,'receiveddetails'])->name('backend.orderlist.received');
            Route::get('cancel/details/{id}', [Backend\OrderlistController::class,'canceldetails'])->name('backend.orderlist.cancel');
            Route::get('review/details/{id}', [Backend\OrderlistController::class,'reviewdetails'])->name('backend.orderlist.review');
            Route::get('add', [Backend\OrderlistController::class,'add'])->name('backend.orderlist.add');
            Route::post('store', [Backend\OrderlistController::class,'store'])->name('backend.orderlist.store');
            Route::get('edit', [Backend\OrderlistController::class,'edit'])->name('backend.orderlist.edit');
            Route::post('update', [Backend\OrderlistController::class,'update'])->name('backend.orderlist.update');
            
        });
        

        Route::prefix('settingbanner')->group(function () {
            Route::get('/', [Backend\BannerController::class,'index'])->name('backend.banner');
            Route::get('add', function(){})->name('backend.banner.add');
            Route::post('store', function(){})->name('backend.banner.store');
            Route::get('edit', [Backend\BannerController::class,'edit'])->name('backend.banner.edit');
            Route::post('update', [Backend\BannerController::class,'update'])->name('backend.banner.update');
            
        });



    });
    // Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
});