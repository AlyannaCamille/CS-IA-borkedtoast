<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ContactController;




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
Route::resource('users', UserController::class);
Route::resource('statuses', StatusController::class);
Route::resource('contacts', ContactController::class);




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

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

Route::get('/indexorders', function () {
    return view('indexorders');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/orders/show', function () {
    return view('show');
});

Route::get('/userform', function () {
    return view('userform');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/thankyou', function () {
    return view('thankyou');
});

