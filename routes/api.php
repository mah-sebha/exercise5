<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
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

Route::post('/get-token', [AuthController::class, 'getApiToken']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/books/{book}/rent', [BookController::class, 'rent']);
    Route::post('/books/{book}/return', [BookController::class, 'return']);
    
    // Get user rented books
    Route::get('/books/rented', [BookController::class, 'rentedBooks']);
});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show']);


