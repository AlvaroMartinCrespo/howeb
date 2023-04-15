<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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
    Route::get('/accomodations', 'accomodations')->middleware('auth')->name('accomodations');
    Route::get('/cpanel', 'cpanel')->middleware('auth')->name('cpanel');
    Route::get('/users', 'users')->middleware('auth')->name('users');
    Route::get('/users/{id}', 'user')->middleware('auth')->name('user');
    Route::get('/listAccomodation', 'listAccomodation')->middleware('auth')->name('listAccomodation');
    Route::get('/accomodation/{id}', 'accomodation')->middleware('auth')->name('accomodation');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/search', 'index')->middleware('auth')->name('search');
    Route::post('/update-data', 'update')->middleware('auth')->name('update');
});

//Controler Landing
Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'landing')->name('landing');
});
