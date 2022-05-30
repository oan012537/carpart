<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\Supplier\Auth\SupplierAuthController;

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
Route::get('supplier/login', [SupplierAuthController::class,'index'])->name('supplier.index');
Route::post('supplier/login', [SupplierAuthController::class, 'login'])->name('supplier.login');
Route::get('supplier/register', [SupplierAuthController::class,'register'])->name('supplier.register');
Route::post('supplier/register', [SupplierAuthController::class,'store'])->name('supplier.store');
Route::get('supplier/logout', [SupplierAuthController::class,'logout'])->name('supplier.logout');


Route::group(['middleware' => 'supplier'], function(){
    Route::prefix('supplier')->group(function () {
        Route::get('/', [SupplierAuthController::class,'index']);
    });
});