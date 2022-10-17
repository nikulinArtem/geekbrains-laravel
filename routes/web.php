<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/vue', 'vue')->name('vue');

Route::name('news.')
    ->prefix('/news')
    ->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/{id}', [NewsController::class, 'show'])->name('show')->where(['id' => '[0-9]+']);

        Route::name('category.')
            ->prefix('/category')
            ->group(function () {
                Route::get('/', [CategoryController::class, 'index'])->name('index');
                Route::get('/{slug}', [CategoryController::class, 'show'])->name('show');
        });
});

Route::get('/news/categories', [CategoryController::class, 'index'])->name('news.category.index');
Route::get('/news/categories/{slug}', [CategoryController::class, 'show'])->name('news.category.show');


Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('index');
    Route::get('/test1', [AdminIndexController::class, 'test1'])->name('test1');
    Route::get('/test2', [AdminIndexController::class, 'test2'])->name('test2');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
