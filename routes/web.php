<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::group([
    'prefix' => '/news',
    'as' => 'news::'
], function () {
    Route::get('', [NewsController::class, 'index'])
        ->name('index');

    Route::get('/card/{news}', [NewsController::class, 'card'])
        ->where('id', '[0-9]+')
        ->name('card');

    Route::get('/category/{category}', [NewsController::class, 'category'])
        ->where('id', '[0-9]+')
        ->name('category');
});

Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name('category::index');

Route::get('/auth/login', [LoginController::class, 'login'])
    ->name('auth::login');

Route::resource('/admin/category', AdminCategoryController::class);

Route::resource('/admin/news', AdminNewsController::class);
