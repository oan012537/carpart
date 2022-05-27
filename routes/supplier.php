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
// Route::get('supplier/login', function(){})->middleware('supplier');
Route::get('/supplier/login', [SupplierAuthController::class, 'index'])->name('supplier.login');
Route::post('/supplier/login', [SupplierAuthController::class, 'login'])->name('supplier.login');
Route::get('/supplier/logout', [SupplierAuthController::class, 'logout'])->name('supplier.logout');

// Route::group(['middleware' => ['supplier']], function () {
//     Route::get('supplier', function(){});
// });


// Route::group(['middleware' => 'supplier'], function(){
//     Route::prefix('en')->group(function () {
//         Route::prefix('supplier')->group(function () {
//             Route::get('/', function(){
//                 dd('d');
//             });
//         });
//     });
// });
// ->middleware('role:editor');

// Route::group(['middleware' => ['Supplier']], function(){
//     Route::prefix('supplier')->group(function () {
//         Route::get('/', function(){
//             dd();
//         });
//         Route::prefix('menu')->group(function () {
//         });
//     });
    
//     // Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
    
// });