<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page\PageController;
use App\Http\Controllers\alumni\AlumniController;
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
/*
   Route Page
 */
Route::get('/', [PageController::class,'index']);
Route::get('/kontak', [PageController::class,'contact']);



/*
	Authentication 
 */
Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 /*
	Route Data alumni
 */
Route::get('/alumni', [AlumniController::class,'index']);
});