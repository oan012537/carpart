<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;

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
Route::get('register/page2', function(){})->name('register.otp');

Route::group(['middleware' => 'auth'], function(){
    Route::prefix('backend')->group(function () {
        Route::get('/', function(){});
        Route::prefix('register')->group(function () {
            Route::get('add', function(){});
            Route::post('store', function(){});
            Route::get('edit', function(){});
            Route::post('update', function(){});
        });
    });
    // Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
});