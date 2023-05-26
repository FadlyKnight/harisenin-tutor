<?php

use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('product', ProductController::class);

// Route::get('/product', [ProductController::class, 'index']);
// Route::post('/product', [ProductController::class, 'store']);
// Route::get('/product/{id}', [ProductController::class, 'show']);
// Route::put('/product/{id}', [ProductController::class, 'update']);
// Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// Route::get('/comment', [CommentController::class,'index'])->name('comment.index');
// Route::post('/comment', [CommentController::class,'store'])->name('comment.store');
// Route::get('/comment/{comment}', [CommentController::class,'show'])->name('comment.show');
// Route::put('/comment/{comment}', [CommentController::class,'update'])->name('comment.update');
// Route::delete('/comment/{comment}', [CommentController::class,'delete'])->name('comment.delete');
