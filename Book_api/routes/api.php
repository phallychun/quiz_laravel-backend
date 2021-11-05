<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Author Route
// Get all Author//
Route::get('/authors',[AuthorController::class, 'index']);

// Create Author //
Route::post('/authors',[AuthorController::class, 'store']);

// Get one Author //
Route::get('/authors/{id}',[AuthorController::class, 'show']);

// Update Author //
Route::put('/authors/{id}',[AuthorController::class, 'update']);

// Remove Author //
Route::delete('/authors/{id}',[AuthorController::class, 'destroy']);


// Book Route

// Get all Book//
Route::get('/books',[BookController::class, 'index']);

// Create Book //
Route::post('/books',[BookController::class, 'store']);

// Get one Book //
Route::get('/books/{id}',[BookController::class, 'show']);

// Update Book //
Route::put('/books/{id}',[BookController::class, 'update']);

// Remove Book //
Route::delete('/books/{id}',[BookController::class, 'destroy']);