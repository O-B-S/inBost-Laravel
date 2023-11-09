<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function () {
   
   Route::get('/dashboard', [DashboardController::class, 'index']);
   //Route::get('/dashboard', function (){
   //   return view('admin.Dashboard');
   //  });
   
     Route::get('/blog', [BlogCategoryController::class, 'index']);
});