<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'index']);

/// ROUTE CATEGORY
Route::controller(CategoryController::class)
    ->prefix('dashboard')
    ->name('category.')
    ->group(function () {
    Route::get('/category', 'index')->name('index'); // -> route('category.index')
    Route::get('/category/create', 'create')->name('create');
    Route::post('/category', 'store')->name('store');
    Route::get('/category/{id}', 'edit')->name('edit');
    Route::put('/category/{id}', 'update')->name('update');
    Route::delete('/category/{id}', 'destroy')->name('destroy');
    Route::get('/check_data', 'check_data')->name('check_data'); // -> route('category.check_data')
});

// Route::resource('category', CategoryController::class);
