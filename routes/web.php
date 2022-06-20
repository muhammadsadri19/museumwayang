<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MRegisterController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\DashboardController;
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
    return view('welcome',[
        'active' => 'tittle'
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'tittle' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'active' => 'about'
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        'active' => 'profile'
    ]);
});

Route::get('/login', function () {
    return view('/login/index', [
        'tittle' => 'Login',
        'active' => 'login'
    ]);
})->name('login')->middleware('guest');


Route::get('/mystore', function() {
    return view('mystore.index');
})->middleware('auth');

Route::get('/dashboard', function() {
    return view('mystore.dashboard', [
        "title" => 'Dashboard',
        "active" => 'dashboard'
    ]);
})->middleware('auth');

Route::get('/sell', function() {
    return view('mystore.sell', [
        "title" => 'Sell',
        "active" => 'sell'
    ]);
})->middleware('auth');

Route::get('/cart', function() {
    return view('mystore.cart', [
        "title" => 'Cart',
        "active" => 'cart'
    ]);
})->middleware('auth');

Route::get('/sell/create', function() {
    return view('/sell/create', [
        "title" => 'Sell',
        "active" => 'sell'
    ]);
})->middleware('auth');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/middlemanRegister', [MRegisterController::class, 'index'])->middleware('auth');
Route::post('/middlemanRegister', [MRegisterController::class, 'store']);

Route::get('/offers', [offersController::class, 'index']);

Route::post('/sell/create', [DashboardController::class, 'store'])->middleware('auth');
