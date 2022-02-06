<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ShortlinkController;
use App\Http\Controllers\PagesController;
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

Route::middleware('visited')->group(function () {
  Route::get('/', [PagesController::class, 'index']);
  Route::get('/about', [PagesController::class, 'about']);
  Route::get('/its-jazz-segment', [PagesController::class, 'segment']);
  Route::get('/jazzineer-gigs', [PagesController::class, 'jazzineer_gigs']);
  Route::get('/konser-1-dekade', [PagesController::class, 'konser']);
  Route::get('/merchandise', [PagesController::class, 'merchandise']);
  Route::get('/join', [PagesController::class, 'join']);
  Route::post('/join', [PagesController::class, 'subscription']);
});

// Admin Routing
Route::get('/login', [AdminController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AdminController::class, 'authentication']);
Route::post('/logout', [AdminController::class, 'logout'])->middleware('auth');
Route::prefix('admin')->middleware('auth')->group(function () {
  Route::get('/', [AdminController::class, 'index']);
  Route::resource('shortlink', ShortlinkController::class)->except('show');
});

Route::get('/visitor_data', [AdminController::class, 'visitor_data']);

// FOR SHORT LINKS
Route::get('/{shortlink:short}', [ShortlinkController::class, 'show'])->middleware('visited');
Route::fallback(function () {
  return view('errors.404');
})->middleware('visited');
