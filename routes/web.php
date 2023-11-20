<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return redirect()->route('home');
});

//AUTH
Route::get('/auth/login', [\App\Http\Controllers\AuthController::class, 'login']) -> name('auth.login');
Route::get('/auth/registration', [\App\Http\Controllers\AuthController::class, 'registration']) -> name('auth.registration');

// RENT
Route::get('/rent/categories', [\App\Http\Controllers\RentController::class, 'categories']) -> name('rent.categories');
Route::get('/rent/heavy_machines', [\App\Http\Controllers\RentController::class, 'heavy_machines']) -> name('rent.heavy_machines');
Route::get('/rent/tools', [\App\Http\Controllers\RentController::class, 'tools']) -> name('rent.tools');
Route::get('/rent/cabins', [\App\Http\Controllers\RentController::class, 'cabins']) -> name('rent.cabins');
Route::get('/rent/air_compressors', [\App\Http\Controllers\RentController::class, 'air_compressors']) -> name('rent.air_compressors');
Route::get('/rent/{tool}', [\App\Http\Controllers\RentController::class, 'tool_info'])->name('rent.tool_info');
Route::get('/rent/{tool}/order', [\App\Http\Controllers\RentController::class, 'order'])->name('rent.order');
Route::get('/rent/{tool}/create_order', [\App\Http\Controllers\RentController::class, 'create_order'])->name('rent.create_order');
//
Route::get('/search', [\App\Http\Controllers\RentController::class, 'search'])->name('rent.search');
//
Route::get('/main', [\App\Http\Controllers\MainController::class, 'main']) -> name('main');
Route::get('/users/{user}/show', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile');
Route::get('/users/{user}/edit', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/users/{user}', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::get('/about', 'App\Http\Controllers\AboutController')->name('about');
Route::get('/contact', 'App\Http\Controllers\ContactController')->name('contact');
Route::get('/career', 'App\Http\Controllers\CareerController')->name('career');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

