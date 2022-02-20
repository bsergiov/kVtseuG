<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SubscribeController;

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

Route::get('/dashboard', [SubscribeController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::resource('/admin', \App\Http\Controllers\Admin\SubscribeController::class)->middleware(['auth']);
Route::resource('/status', \App\Http\Controllers\Admin\StatusWorkController::class)->middleware(['auth']);

require __DIR__.'/auth.php';

