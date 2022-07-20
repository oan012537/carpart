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
                Route::post('updates', [Backend\ApprovalRequestIndividualController::class,'fastupdate'])->name('backend.approval.individual.fast.update');
                Route::get('destroy', [Backend\ApprovalRequestIndividualController::class,'destroy'])->name('backend.approval.individual.destroy');

                Route::get('changestatus', [Backend\ApprovalRequestIndividualController::class,'changestatus']);

                Route::post('approve', [Backend\ApprovalRequestLegalController::class,'approval'])->name('backend.approval.individual.approve');

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
            Route::get('datatables', [Backend\ProductController ::class,'datatables'])->name('backend.product.datatables');
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
        
        Route::prefix('pdpa')->group(function () {
            Route::get('/', [Backend\PDPAController ::class,'index'])->name('backend.pdpa');
            Route::post('store', [Backend\PDPAController::class,'store'])->name('backend.pdpa.store');
            Route::get('datatables', [Backend\PDPAController ::class,'datatables'])->name('backend.pdpa.datatables');
            Route::get('datatables/expired', [Backend\PDPAController ::class,'datatablesexpired'])->name('backend.pdpa.datatables.expired');
            Route::get('consentlist', [Backend\PDPAController ::class,'consentlist'])->name('backend.pdpa.consentlist');
            Route::get('consentlist/datatables', [Backend\PDPAController ::class,'datatablesconsent'])->name('backend.pdpa.consentlist.datatables');
            Route::get('consentlist/datatables/expired', [Backend\PDPAController ::class,'datatablesconsentexpired'])->name('backend.pdpa.consentlist.datatables.expired');
            Route::post('update', [Backend\PDPAController::class,'update'])->name('backend.pdpa.update');
            Route::post('changestatus', [Backend\PDPAController::class,'changestatus'])->name('backend.pdpa.changestatus');
            
        });

        Route::prefix('banner')->group(function () {
            Route::get('/', [Backend\BannerController::class,'index'])->name('backend.banner');
            Route::get('datatables', [Backend\BannerController::class,'datatables'])->name('backend.banner.datatables');
            Route::get('datatables/active', [Backend\BannerController::class,'datatablesactive'])->name('backend.banner.datatables.active');
            Route::get('datatables/notactive', [Backend\BannerController::class,'datatablesnotactive'])->name('backend.banner.datatables.notactive');
            Route::get('add', [Backend\BannerController::class,'add'])->name('backend.banner.add');
            Route::post('store', [Backend\BannerController::class,'store'])->name('backend.banner.store');
            Route::get('edit/{id}', [Backend\BannerController::class,'edit'])->name('backend.banner.edit');
            Route::post('update', [Backend\BannerController::class,'update'])->name('backend.banner.update');
            
        });

        Route::prefix('manage')->group(function () {
            Route::prefix('supplier')->group(function () {
                Route::prefix('individual')->group(function () {
                    Route::get('/', [Backend\ManageSupplierController::class,'individualindex'])->name('backend.manage.supplier.individual');
                    Route::get('datatables', [Backend\ManageSupplierController ::class,'individualdatatables'])->name('backend.manage.supplier.individual.datatables');
                    
                    Route::get('profile/{id}', [Backend\ManageSupplierController::class,'individualprofile'])->name('backend.manage.supplier.individual.profile');
                    Route::get('profile/edit/{id}', [Backend\ManageSupplierController::class,'individualprofileedit'])->name('backend.manage.supplier.individual.profile.edit');
                    Route::post('profile/update/{id}', [Backend\ManageSupplierController::class,'individualprofileupdate'])->name('backend.manage.supplier.individual.profile.update');

                    Route::get('profile/address/edit/{id}', [Backend\ManageSupplierController::class,'individualprofileaddressedit'])->name('backend.manage.supplier.individual.profile.edit');
                    Route::post('profile/address/update/{id}', [Backend\ManageSupplierController::class,'individualprofileaddressupdate'])->name('backend.manage.supplier.individual.profile.update');

                    
                    Route::get('profile/store/edit/{id}', [Backend\ManageSupplierController::class,'individualprofilestoreedit'])->name('backend.manage.supplier.individual.profile.edit');
                    Route::post('profile/store/update/{id}', [Backend\ManageSupplierController::class,'individualprofilestoreupdate'])->name('backend.manage.supplier.individual.profile.update');

                    Route::get('historyparts/{id}', [Backend\ManageSupplierController::class,'individualhistoryparts'])->name('backend.manage.supplier.individual.historyparts');

                    Route::get('pendinglist/{id}', [Backend\ManageSupplierController::class,'individualpendinglist'])->name('backend.manage.supplier.individual.pendinglist');

                    Route::get('historysales/{id}', [Backend\ManageSupplierController::class,'individualhistorysales'])->name('backend.manage.supplier.individual.historysales');

                    Route::get('claimlist/{id}', [Backend\ManageSupplierController::class,'individualclaimlist'])->name('backend.manage.supplier.individual.claimlist');

                    Route::get('productlist/{id}', [Backend\ManageSupplierController::class,'individualproductlist'])->name('backend.manage.supplier.individual.productlist');

                    Route::get('changestatus', [Backend\ManageSupplierController::class,'changestatus'])->name('backend.manage.supplier.individual.changestatus');

                });

                Route::prefix('legal')->group(function () {
                    Route::get('/', [Backend\ManageSupplierController::class,'legalindex'])->name('backend.manage.supplier.legal');
                    Route::get('datatables', [Backend\ManageSupplierController ::class,'legaldatatables'])->name('backend.manage.supplier.legal.datatables');
                    
                    Route::get('profile/{id}', [Backend\ManageSupplierController::class,'legalprofile'])->name('backend.manage.supplier.legal.profile');
                    Route::get('profile/edit/{id}', [Backend\ManageSupplierController::class,'legalprofileedit'])->name('backend.manage.supplier.legal.profile.edit');
                    Route::post('profile/update/{id}', [Backend\ManageSupplierController::class,'legalprofileupdate'])->name('backend.manage.supplier.legal.profile.update');
                    
                    Route::get('profile/address/edit/{id}', [Backend\ManageSupplierController::class,'legalprofileaddressedit'])->name('backend.manage.supplier.legal.profile.edit');
                    Route::post('profile/address/update/{id}', [Backend\ManageSupplierController::class,'legalprofileaddressupdate'])->name('backend.manage.supplier.legal.profile.update');

                    
                    Route::get('profile/store/edit/{id}', [Backend\ManageSupplierController::class,'legalprofilestoreedit'])->name('backend.manage.supplier.legal.profile.edit');
                    Route::post('profile/store/update/{id}', [Backend\ManageSupplierController::class,'legalprofilestoreupdate'])->name('backend.manage.supplier.legal.profile.update');

                    Route::get('historyparts/{id}', [Backend\ManageSupplierController::class,'legalhistoryparts'])->name('backend.manage.supplier.legal.historyparts');

                    Route::get('pendinglist/{id}', [Backend\ManageSupplierController::class,'legalpendinglist'])->name('backend.manage.supplier.legal.pendinglist');

                    Route::get('historysales/{id}', [Backend\ManageSupplierController::class,'legalhistorysales'])->name('backend.manage.supplier.legal.historysales');

                    Route::get('claimlist/{id}', [Backend\ManageSupplierController::class,'legalclaimlist'])->name('backend.manage.supplier.legal.claimlist');

                    Route::get('productlist/{id}', [Backend\ManageSupplierController::class,'legalproductlist'])->name('backend.manage.supplier.legal.productlist');
                });

                Route::prefix('commission')->group(function () {
                    Route::get('/', [Backend\ManageSupplierController::class,'commissionindex'])->name('backend.manage.supplier.commission');
                });
            });
            Route::prefix('buyer')->group(function () {
                // Route::get('/', [Backend\ManageBuyerController::class,'index'])->name('backend.manage.buyer');
                Route::prefix('individual')->group(function () {
                    Route::get('/', [Backend\ManageBuyerController::class,'individualindex'])->name('backend.manage.buyer.individual');
                    Route::get('datatables', [Backend\ManageBuyerController ::class,'individualdatatables'])->name('backend.manage.buyer.individual.datatables');
                    
                    Route::get('profile/{id}', [Backend\ManageBuyerController::class,'individualprofile'])->name('backend.manage.buyer.individual.profile');
                    Route::get('profile/edit/{id}', [Backend\ManageBuyerController::class,'individualprofileedit'])->name('backend.manage.buyer.individual.profile.edit');
                    Route::post('profile/update/{id}', [Backend\ManageBuyerController::class,'individualprofileupdate'])->name('backend.manage.buyer.individual.profile.update');

                    Route::get('profile/address/edit/{id}', [Backend\ManageBuyerController::class,'individualprofileaddressedit'])->name('backend.manage.buyer.individual.profile.edit');
                    Route::post('profile/address/update/{id}', [Backend\ManageBuyerController::class,'individualprofileaddressupdate'])->name('backend.manage.buyer.individual.profile.update');

                    
                    Route::get('profile/store/edit/{id}', [Backend\ManageBuyerController::class,'individualprofilestoreedit'])->name('backend.manage.buyer.individual.profile.edit');
                    Route::post('profile/store/update/{id}', [Backend\ManageBuyerController::class,'individualprofilestoreupdate'])->name('backend.manage.buyer.individual.profile.update');

                    Route::get('historyparts/{id}', [Backend\ManageBuyerController::class,'individualhistoryparts'])->name('backend.manage.buyer.individual.historyparts');

                    Route::get('pendinglist/{id}', [Backend\ManageBuyerController::class,'individualpendinglist'])->name('backend.manage.buyer.individual.pendinglist');

                    Route::get('historysales/{id}', [Backend\ManageBuyerController::class,'individualhistorysales'])->name('backend.manage.buyer.individual.historysales');

                    Route::get('claimlist/{id}', [Backend\ManageBuyerController::class,'individualclaimlist'])->name('backend.manage.buyer.individual.claimlist');

                    Route::get('productlist/{id}', [Backend\ManageBuyerController::class,'individualproductlist'])->name('backend.manage.buyer.individual.productlist');



                });

                Route::prefix('legal')->group(function () {
                    Route::get('/', [Backend\ManageBuyerController::class,'legalindex'])->name('backend.manage.buyer.legal');
                    Route::get('datatables', [Backend\ManageBuyerController ::class,'legaldatatables'])->name('backend.manage.buyer.legal.datatables');
                    
                    Route::get('profile/{id}', [Backend\ManageBuyerController::class,'legalprofile'])->name('backend.manage.buyer.legal.profile');
                    Route::get('profile/edit/{id}', [Backend\ManageBuyerController::class,'legalprofileedit'])->name('backend.manage.buyer.legal.profile.edit');
                    Route::post('profile/update/{id}', [Backend\ManageBuyerController::class,'legalprofileupdate'])->name('backend.manage.buyer.legal.profile.update');
                    
                    Route::get('profile/address/edit/{id}', [Backend\ManageBuyerController::class,'legalprofileaddressedit'])->name('backend.manage.buyer.legal.profile.edit');
                    Route::post('profile/address/update/{id}', [Backend\ManageBuyerController::class,'legalprofileaddressupdate'])->name('backend.manage.buyer.legal.profile.update');

                    
                    Route::get('profile/store/edit/{id}', [Backend\ManageBuyerController::class,'legalprofilestoreedit'])->name('backend.manage.buyer.legal.profile.edit');
                    Route::post('profile/store/update/{id}', [Backend\ManageBuyerController::class,'legalprofilestoreupdate'])->name('backend.manage.buyer.legal.profile.update');

                    Route::get('historyparts/{id}', [Backend\ManageBuyerController::class,'legalhistoryparts'])->name('backend.manage.buyer.legal.historyparts');

                    Route::get('pendinglist/{id}', [Backend\ManageBuyerController::class,'legalpendinglist'])->name('backend.manage.buyer.legal.pendinglist');

                    Route::get('historysales/{id}', [Backend\ManageBuyerController::class,'legalhistorysales'])->name('backend.manage.buyer.legal.historysales');

                    Route::get('claimlist/{id}', [Backend\ManageBuyerController::class,'legalclaimlist'])->name('backend.manage.buyer.legal.claimlist');

                    Route::get('productlist/{id}', [Backend\ManageBuyerController::class,'legalproductlist'])->name('backend.manage.buyer.legal.productlist');
                });

                Route::get('changestatus', [Backend\ManageBuyerController::class,'changestatus'])->name('backend.manage.buyer.changestatus');

            });
            
            
        });

        Route::prefix('delivery')->group(function () {
            Route::get('/', [Backend\DeliveryController::class,'index'])->name('backend.delivery');
            Route::get('datatables', [Backend\DeliveryController::class,'datatables'])->name('backend.delivery.datatables');
            Route::get('datatables/large', [Backend\DeliveryController::class,'datatableslarge'])->name('backend.delivery.datatables.large');
            Route::get('datatables/customseller', [Backend\DeliveryController::class,'datatablescustomseller'])->name('backend.delivery.datatables.customseller');
            Route::get('add', [Backend\DeliveryController::class,'add'])->name('backend.delivery.add');
            Route::post('store', [Backend\DeliveryController::class,'store'])->name('backend.delivery.store');
            Route::get('edit/{id}', [Backend\DeliveryController::class,'edit'])->name('backend.delivery.edit');
            Route::post('update', [Backend\DeliveryController::class,'update'])->name('backend.delivery.update');
            Route::get('changestatus', [Backend\DeliveryController::class,'changestatus'])->name('backend.delivery.changestatus');
        });

    });
    // Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
});