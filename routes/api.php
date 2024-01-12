<?php

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
Route::POST('/blog', [App\Http\Controllers\BlogApiController::class, 'index'])->name('blog');
Route::POST('/user', [App\Http\Controllers\BlogApiController::class, 'user'])->name('user');
Route::POST('/category', [App\Http\Controllers\BlogApiController::class, 'category'])->name('category');
Route::POST('/allblogs', [App\Http\Controllers\BlogApiController::class, 'allblogs'])->name('allblogs');
Route::get('/blog', [App\Http\Controllers\BlogApiController::class, 'index'])->name('blog');
