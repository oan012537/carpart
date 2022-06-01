<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend as Backend;

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
        Route::get('/', function(){});
        Route::get('/dashboard', [Backend\DashboardController::class,'index'])->name('backend.dashboard');
        
        Route::prefix('register')->group(function () {
            Route::get('add', function(){});
            Route::post('store', function(){});
            Route::get('edit', function(){});
            Route::post('update', function(){});
        });

        Route::prefix('register')->group(function () {
            Route::get('add', function(){});
            Route::post('store', function(){});
            Route::get('edit', function(){});
            Route::post('update', function(){});
        });
    });
    // Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
});