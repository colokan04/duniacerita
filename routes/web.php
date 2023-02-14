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
// Auth::routes();
// Route::get('/', function () {
//     if (auth()->user()) {
//         if (auth()->user()->level->id == 3) {
//             return redirect(route('ticket.index'));
//         } else {
//             return redirect(route('admin.dashboard.index'));
//         }
//     }
//     // return view('slider.index');
//     $sliders = Slider::all();
//     return view('slider.index', compact('sliders'));
// })->name('home');

Auth::routes();
Route::get('/', [App\Http\Controllers\page\home\HomeController::class, 'index'])->name('home');
Route::resource('home', App\Http\Controllers\page\home\HomeController::class);
Route::resource('genre', App\Http\Controllers\page\genre\GenreController::class);
Route::resource('service', App\Http\Controllers\page\service\ServiceController::class);
Route::resource('contact', App\Http\Controllers\page\contact\ContactController::class);

Route::resource('slider', App\Http\Controllers\SliderController::class);
