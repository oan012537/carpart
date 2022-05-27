<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer as Buyer;
use App\Http\Controllers\Supplier as Supplier;
use App\Http\Controllers\Backend as Backend;
use App\Http\Controllers\SocialController;
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

// Route::get('/', function () {
//     $lang = App::getLocale(); //ดึงภาษาตอนแรก enตามน config
//     // return redirect("/$lang");
//     return view('welcome');
// });
Route::get('/', function () {return view('home');});

Route::get('setlang/{lang}', function ($lang) {
    Session::put('lang', $lang);
    return Redirect::back();
});
// Auth::routes();

// Route::get('/chat', [ChatsController::class, 'index']);
Route::get('messages', [ChatsController::class, 'fetchMessages']);
Route::post('messages', [ChatsController::class, 'sendMessage'])->name('messages');

// login google
Route::get('google/login', [SocialController::class, 'redirectToGoogle'])->name('google.login');
Route::get('google/callback', [SocialController::class, 'handleCallback'])->name('google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
