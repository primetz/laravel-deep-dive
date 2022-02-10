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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::group([
    'prefix' => '/news',
    'as' => 'news::'
], function () {
    Route::get('', [\App\Http\Controllers\NewsController::class, 'categories'])
        ->name('categories');

    Route::get('/category/{name}', [\App\Http\Controllers\NewsController::class, 'category'])
        ->where('name', '^[\w]+$')
        ->name('category');

    Route::get('/article/{id}', [\App\Http\Controllers\NewsController::class, 'article'])
        ->where('id', '[0-9]+')
        ->name('article');
});

Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::'
], function () {
    Route::get('', [\App\Http\Controllers\Admin\NewsController::class, 'index'])
        ->name('index');

    Route::get('/create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])
        ->name('create');

    Route::get('/update', [\App\Http\Controllers\Admin\NewsController::class, 'update'])
        ->name('update');

    Route::get('/delete', [\App\Http\Controllers\Admin\NewsController::class, 'destroy'])
        ->name('delete');
});

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index']);
