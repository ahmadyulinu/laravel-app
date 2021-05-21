<?php

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


Route::get('/', function () {
    return view('home');
});



Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/admin', function () {
        return view('dashboard');
    });

    Route::resource('news', App\Http\Controllers\NewsController::class);
Route::resource('games', App\Http\Controllers\GamesController::class);
Route::resource('vids', App\Http\Controllers\VideosController::class);
    
});  
// Route::post('/login', [AuthController::class, 'login']);

Route::get('/login', function() {
    return view('auth/login');
});
Route::get('/register', function() {
    return view('auth/register');
});



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');