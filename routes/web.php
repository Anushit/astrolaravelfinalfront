<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
// use App\Http\Controllers\HomeController;
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
//     return view('index');
// });
// Route::get('index',[HomeController::class,'show']);
Route::get('/', 'App\Http\Controllers\HomeController@show')->name('index');
Route::get('/index', 'App\Http\Controllers\HomeController@show')->name('index');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('about');
Route::get('/astrologer', 'App\Http\Controllers\HomeController@astrologer')->name('astrologer');
Route::get('/astrologer/{id}', 'App\Http\Controllers\HomeController@details')->name('astrologer.details');
Route::get('/services', 'App\Http\Controllers\HomeController@services')->name('services');
Route::get('/contactus', 'App\Http\Controllers\HomeController@showcontact')->name('contact');
Route::post('/contactus', 'App\Http\Controllers\HomeController@store')->name('contact.store');


Route::group(['prefix' => 'admin'], function () {
  Route::get('/', 'App\Http\Controllers\AdminAuth\LoginController@showLoginForm')->name('login');
  Route::get('/login', 'App\Http\Controllers\AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'App\Http\Controllers\AdminAuth\LoginController@login');
  Route::post('/logout', 'App\Http\Controllers\AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'App\Http\Controllers\AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'App\Http\Controllers\AdminAuth\RegisterController@register');

  Route::post('/password/email', 'App\Http\Controllers\AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  
  Route::post('/password/reset', 'App\Http\Controllers\AdminAuth\ResetPasswordController@reset')->name('password.email');
  
  Route::get('/password/reset', 'App\Http\Controllers\AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  
  Route::get('/password/reset/{token}', 'App\Http\Controllers\AdminAuth\ResetPasswordController@showResetForm');

  Route::get('/home', function () {
      // $users[] = Auth::user();
      // $users[] = Auth::guard()->user();
      $users[] = Auth::guard('admin')->user();
      // dd($users);
      return view('admin.home');
  })->name('home');
});


