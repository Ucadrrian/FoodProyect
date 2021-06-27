<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\ContentController::class, 'getHome']);
Route::get('/About', [App\Http\Controllers\ContentController::class, 'getAbout']);
Route::get('/Gallery', [App\Http\Controllers\ContentController::class, 'getGallery']);
Route::get('/login', [App\Http\Controllers\ConnectController::class, 'getLogin'])->name('login');
Route::get('/register', [App\Http\Controllers\ConnectController::class, 'getRegister'])->name('register');