<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserpageController;
use pp\Http\Controllers\Auth\LoginController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Model\Userpage;

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
//     return view('welcome');
// });





Route::get('/homepage', [App\Http\Controllers\HomepageController::class, 'index']);
Route::post('/homepage', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');

Route::get('/userpage', [App\Http\Controllers\UserpageController::class, 'index']);
Route::post('/userpage', [App\Http\Controllers\UserpageController::class, 'index'])->name('userpage');


Auth::routes();

Route::get('login/google',[App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);

Route::get('login/facebook',[App\Http\Controllers\Auth\LoginController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback',[App\Http\Controllers\Auth\LoginController::class,'handleFacebookCallback']);


Route::get('/homepage/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('/homepage');
});

// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);