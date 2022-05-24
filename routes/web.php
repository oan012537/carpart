<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer as Buyer;
use App\Http\Controllers\Supplier as Supplier;
use App\Http\Controllers\Backend as Backend;
use App\Http\Controllers\ChatsController;
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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/chat', [ChatsController::class, 'index']);
Route::get('messages', [ChatsController::class, 'fetchMessages']);
Route::post('messages', [ChatsController::class, 'sendMessage'])->name('messages');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['Buyer']], function () {

    Route::prefix('Buyer')->group(function () {
        Route::get('/', [Buyer\controllername::class, 'index']);
    });
});

Route::group(['middleware' => ['Supplier']], function () {

    Route::prefix('Supplier')->group(function () {
        Route::get('/', [Supplier\controllername::class, 'index']);
    });
});

Route::group(['middleware' => ['Backend']], function () {

    Route::prefix('Backend')->group(function () {
        Route::get('/', [Backend\controllername::class, 'index']);
    });
});
require __DIR__.'/auth.php';
