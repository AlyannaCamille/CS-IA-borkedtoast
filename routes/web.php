<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;



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

  

Route::resource('orders', OrderController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/process', function () {
    return view('process');
});

Route::get('/confirmed', function () {
    return view('confirmed');
});

Route::get('/newform', function () {
    return view('newform');
});



