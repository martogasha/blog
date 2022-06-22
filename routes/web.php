<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SitemapController;
use App\Models\Blog;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
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

Route::get('hd', function () {
    return view('welcome');
});
Route::get('/', [CategoryController::class, 'index']);
Route::get('category', [CategoryController::class, 'category']);
Route::get('news', [CategoryController::class, 'news']);
Route::get('entertainment', [CategoryController::class, 'entertainment']);
Route::get('sports', [CategoryController::class, 'sports']);
Route::get('tech', [CategoryController::class, 'tech']);
Route::get('lifestyle', [CategoryController::class, 'lifestyle']);
Route::get('business', [CategoryController::class, 'business']);
Route::get('search', [DetailController::class, 'search']);
Route::post('sear', [DetailController::class, 'sear']);
Route::get('detail/{name}/page', [DetailController::class, 'detail']);
Route::get('admin', [AdminController::class, 'index']);
Route::get('blog', [AdminController::class, 'blog']);
Route::get('addBlog', [AdminController::class, 'addBlog']);
Route::post('storeBlog', [AdminController::class, 'storeBlog']);
Route::post('editB', [AdminController::class, 'editB']);
Route::get('editBlog/{id}', [AdminController::class, 'editBlog']);
Route::post('dBlog/{id}', [AdminController::class, 'dBlog']);
Route::get('generate-sitemap', [SitemapController::class, 'sitemap']);
