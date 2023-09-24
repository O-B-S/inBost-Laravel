<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ContactController;

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

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/code', 'code');
Route::view('/data-science', 'data-science');
Route::view('/IA', 'IA');
Route::view('/digital-marketing', 'digital-marketing');
Route::view('/network', 'network');
Route::view('/realisations', 'realisations');
Route::view('/blog', 'blog');
Route::view('/contact', 'contact');


Route::post('/contact.store', [ContactController::class, 'store']);
