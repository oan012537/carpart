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
    });
    // Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
});