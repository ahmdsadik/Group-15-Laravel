<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('posts')->controller(PostController::class)->group(function () {
    Route::get('', 'index');
    Route::get('create', 'create');
    Route::post('', 'store');
    Route::get('{id}', 'show');
    Route::get('{id}/edit', 'edit');
    Route::put('{id}', 'update');
    Route::delete('{id}', 'destroy');
});
