<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\boardController;

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
    return view('welcome');
});

//prefix와 group으로 라우팅 주소를 묶을 수 있다.
Route::prefix('boards')-> group(function(){
    Route::get('/', [BoardController::class, 'index']);
    Route::get('/create', [BoardController::class, 'create'])->name('boards.create');
    Route::get('/show', [boardController::class], 'show')->name('boards.show');
    }
);