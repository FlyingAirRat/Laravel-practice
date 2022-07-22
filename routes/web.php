<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

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
    Route::get('create', [BoardController::class, 'create'])->name('boards.create');
    Route::post('store', [BoardController::class, 'store'])->name('boards.store');
    Route::get('show', [BoardController::class, 'show'])->name('boards.show');
    //Route::get('/show', [BoardController::class], 'show')->name('boards.show'); 가 아니다!!
    Route::get('destroy', [BoardController::class, 'destroy']);
    //이거 못 추가해서 헤멨다. 메소드 추가하면 라우터에 추가해주자
    Route::get('edit', [BoardController::class, 'edit'])->name('boards.edit');
    Route::post('update', [BoardController::class, 'update'])->name('boards.update');
});