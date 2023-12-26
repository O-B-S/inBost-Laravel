<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Frontend\BlogFrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
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

//blog frontend
Route::get('/blog', [BlogFrontendController::class, 'index']);
Route::get('view-category/{name}', [BlogFrontendController::class, 'viewcategory']);
Route::get('view-category/{category_name}/{post_title}', [BlogFrontendController::class, 'viewpost']);
Route::get('view-post/{post_title}',[BlogFrontendController::class, 'viewPostsdetails'] );

Route::post('/contact.store', [ContactController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function () {
   
   //Dashboard
   Route::get('/admin/dashboard', [DashboardController::class, 'index']);

   //Blog category
   Route::get('/admin/blogs', [BlogCategoryController::class, 'index']);
   Route::get('/admin/add-category', [BlogCategoryController::class, 'add']);
   Route::post('insert-category', [BlogCategoryController::class, 'insert']);
   Route::get('edit-category/{id}', [BlogCategoryController::class, 'edit']);
   Route::put('update-category/{id}', [BlogCategoryController::class, 'update']);
   Route::get('delete-category/{id}', [BlogCategoryController::class, 'destroy']);


   //Blog posts
   Route::get('/admin/post', [PostController::class, 'index']);
   Route::get('/admin/add-post', [PostController::class, 'add']);
   Route::post('insert-post', [PostController::class, 'insert']);
   Route::get('edit-post/{id}', [PostController::class, 'edit']);
   Route::put('update-post/{id}', [PostController::class, 'update']);
   Route::get('delete-post/{id}', [PostController::class, 'destroy']);
});