<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
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


// Routes LoginController
Route::controller(LoginController::class)->group(function () {
    //Routes
    Route::get('/login', 'loginPage')->name('login');
    Route::get('/register', 'registerPage')->name('register');
    // Session methods
    Route::post('/register-validate', 'register')->name('register-validate');
    Route::post('/login-validate', 'login')->name('login-validate');
    Route::post('/logout', 'logout')->name('logout');
});

//Routes PageController
Route::controller(PageController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('home');
    Route::get('/hoteles', 'hoteles')->middleware('auth')->name('hoteles');
});

//Landing Page
Route::get('/', function () {
    return view('landing');
})->name('landing');
