<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\VideosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// Login and Register Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// news routes
Route::get('/news', [NewsController::class, 'all']);
Route::get('/news/{id}', [NewsController::class, 'findOne']);

// protected news routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::delete('/news/{id}', [NewsController::class, 'destroy']);
    Route::post('/news', [NewsController::class, 'store']);
    Route::put('/news/{id}', [NewsController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);
});  


// games routes
Route::get('/games', [GamesController::class, 'all']);
Route::get('/games/{id}', [GamesController::class, 'findOne']);
Route::post('/games', [GamesController::class, 'store']);
// protected game routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::put('/games/{id}', [GamesController::class, 'update']);
    Route::delete('/games/{id}', [GamesController::class, 'destroy']);
});  

// video routes
Route::get('/videos', [VideosController::class, 'all']);
Route::get('/videos/{id}', [VideosController::class, 'findOne']);
// protected video routes
Route::group(['middleware' => ['auth:sanctum']], function () {  
    Route::post('/videos', [VideosController::class, 'store']);
    Route::delete('/videos/{id}', [VideosController::class, 'destroy']);
    Route::put('/videos/{id}', [VideosController::class, 'update']);
});  