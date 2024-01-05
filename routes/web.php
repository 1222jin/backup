<?php

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



//Auth::routes();



Route::get('/index', [App\Http\Controllers\TestController::class, 'test_view']);
Route::post('/index/add',[App\Http\Controllers\TestController::class, 'test_post']);
Route::DELETE('/index/delete',[App\Http\Controllers\TestController::class, 'test_delete']);
Route::PUT('/index/update/{id}',[App\Http\Controllers\TestController::class, 'test_update'])->name('update_d');
Route::get('/', function () {
    return view('welcome');
});