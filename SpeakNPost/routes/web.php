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

Route::get('/userpage/edit', [App\Http\Controllers\UserpageController::class, 'edit']);
Route::post('/userpage/edit', [App\Http\Controllers\UserpageController::class, 'edit'])->name('edit');

Route::get('/userpage/update', [App\Http\Controllers\UserpageController::class, 'update']);
Route::post('/userpage/update', [App\Http\Controllers\UserpageController::class, 'update'])->name('update');

Route::get('/admin', [App\Http\Controllers\TopicController::class, 'index']);
Route::post('/admin', [App\Http\Controllers\TopicController::class, 'index'])->name('admin');

Route::get('/admin/addtopic', [App\Http\Controllers\TopicController::class, 'create']);
Route::post('/admin/addtopic', [App\Http\Controllers\TopicController::class, 'create'])->name('addtopic');

Route::get('/admin/addsubtopic', [App\Http\Controllers\SubtopicController::class, 'create']);
Route::post('/admin/addsubtopic', [App\Http\Controllers\SubtopicController::class, 'create'])->name('addstopic');

Route::get('/admin/savetopic', [App\Http\Controllers\TopicController::class, 'store']);
Route::post('/admin/savetopic', [App\Http\Controllers\TopicController::class, 'store'])->name('savetopic');

Route::get('/admin/savestopic', [App\Http\Controllers\SubtopicController::class, 'store']);
Route::post('/admin/savestopic', [App\Http\Controllers\SubtopicController::class, 'store'])->name('savestopic');

Route::get('/admin/deltopic', [App\Http\Controllers\TopicController::class, 'destroy']);
Route::post('/admin/deltopic', [App\Http\Controllers\TopicController::class, 'destroy'])->name('deltopic');

Route::get('/admin/delstopic', [App\Http\Controllers\SubtopicController::class, 'destroy']);
Route::post('/admin/delstopic', [App\Http\Controllers\SubtopicController::class, 'destroy'])->name('delstopic');



Auth::routes();

Route::get('login/google',[App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);

Route::get('login/facebook',[App\Http\Controllers\Auth\LoginController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback',[App\Http\Controllers\Auth\LoginController::class,'handleFacebookCallback']);


Route::get('/homepage/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('/homepage');
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

