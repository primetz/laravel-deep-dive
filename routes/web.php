<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
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

Route::get('/category', [CategoryController::class, 'index'])
    ->name('category::index');

Route::get('/auth/login', [LoginController::class, 'login'])
    ->name('auth::login');

Route::group([
    'prefix' => '/admin',
    'as' => 'admin.',
    'middleware' => 'auth'
], function () {
    Route::resource('/category', AdminCategoryController::class);

    Route::resource('/news', AdminNewsController::class);

    Route::group([
        'prefix' => '/profile',
        'as' => 'profile.'
    ], function () {
        Route::get('/', [AdminProfileController::class, 'index'])
            ->name('index')
            ->middleware('check_admin');

        Route::get('/show', [AdminProfileController::class, 'show'])
            ->name('show');

        Route::put('/update', [AdminProfileController::class, 'update'])
            ->name('update');

        Route::get('/create', [AdminProfileController::class, 'create'])
            ->name('create')
            ->middleware('check_admin');

        Route::post('/save', [AdminProfileController::class, 'save'])
            ->name('save')
            ->middleware('check_admin');

        Route::get('/edit/{id}', [AdminProfileController::class, 'edit'])
            ->where('id', '[0-9]+')
            ->name('edit')
            ->middleware('check_admin');

        Route::put('/store/{id}', [AdminProfileController::class, 'store'])
            ->where('id', '[0-9]+')
            ->name('store')
            ->middleware('check_admin');

        Route::delete('/delete/{id}', [AdminProfileController::class, 'destroy'])
            ->where('id', '[0-9]+')
            ->name('delete');
    });
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
