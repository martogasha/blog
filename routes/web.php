<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
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
Route::get('detail/{id}', [DetailController::class, 'detail']);
//admin
Route::get('admin', [AdminController::class, 'index']);
Route::get('blog', [AdminController::class, 'blog']);
Route::get('addBlog', [AdminController::class, 'addBlog']);
Route::post('storeBlog', [AdminController::class, 'storeBlog']);
Route::post('editB', [AdminController::class, 'editB']);
Route::get('editBlog/{id}', [AdminController::class, 'editBlog']);
Route::post('dBlog/{id}', [AdminController::class, 'dBlog']);
