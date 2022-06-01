<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Supplier as Supplier;

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
// Route::get('supplier/login', [Supplier\Auth\SupplierAuthController::class,'index'])->name('supplier.login');
// Route::post('supplier/login', [Supplier\Auth\SupplierAuthController::class, 'login'])->name('supplier.login.store');
// Route::get('supplier/register', [Supplier\Auth\SupplierAuthController::class,'register'])->name('supplier.register');
// Route::post('supplier/register', [Supplier\Auth\SupplierAuthController::class,'store'])->name('supplier.register.store');
// Route::get('supplier/logout', [Supplier\Auth\SupplierAuthController::class,'logout'])->name('supplier.logout');


// Route::group(['middleware' => 'supplier'], function(){
    Route::prefix('supplier')->group(function () {
        Route::get('/', function(){});
    });
// });