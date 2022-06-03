<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('buyer/login-buyer', [Buyer\buyerController::class, 'loginbuyer']);
Route::get('/buyer/login-buyer', 'App\Http\Controllers\Buyer\buyerController@login_buyer');

