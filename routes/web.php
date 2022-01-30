<?php

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/its-jazz-segment', [PagesController::class, 'segment']);
Route::get('/jazzineer-gigs', [PagesController::class, 'jazzineer_gigs']);
Route::get('/konser-1-dekade', [PagesController::class, 'konser']);
Route::get('/merchandise', [PagesController::class, 'merchandise']);
Route::get('/join', [PagesController::class, 'join']);

Route::post('/join', [PagesController::class, 'subscription']);
