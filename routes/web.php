<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
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
    Route::get('/login', 'loginPage')->name('login');
    Route::get('/register', 'registerPage')->name('register');
});

//Landing Page
Route::get('/', function () {
    return view('landing');
})->name('landing');
