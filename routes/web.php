<?php

use Illuminate\Support\Facades\Route;
use App\Models\Slider;

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

Route::get('/', [App\Http\Controllers\page\home\HomeController::class, 'index'])->name('home');
Route::resource('home', App\Http\Controllers\page\home\HomeController::class);
Route::resource('genre', App\Http\Controllers\page\genre\GenreController::class);
Route::resource('service', App\Http\Controllers\page\service\ServiceController::class);
Route::resource('contact', App\Http\Controllers\page\contact\ContactController::class);
Route::resource('slider', App\Http\Controllers\SliderController::class);

Route::get('dashboard', [App\Http\Controllers\CustomAuthController::class, 'dashboard']);
Route::get('login', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [App\Http\Controllers\CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');

// Route::get('login', [App\Http\Controllers\auth\LoginController::class,'index'])->name('login');
// Route::post('login', [App\Http\Controllers\auth\LoginController::class,'loginProccess'])->name('login.proccess');
// Route::get('signout', [App\Http\Controllers\auth\LoginController::class,'signout'])->name('signout');

// Route::middleware(['auth'])->group(function () {

//     Route::get('dashboard', [App\Http\Controllers\auth\LoginController::class,'dashboard'])->name('dashboard');
//     Route::resource('home', App\Http\Controllers\user\home\HomeController::class);

// });
