<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\UserAnswerController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/game', function () {
    return view('game');
})->middleware(['auth', 'verified'])->name('game');

Route::get('/comodines', function () {
    return view('comodines');
})->middleware(['auth', 'verified'])->name('comodines');

Route::get('/sugerencias', function () {
    return view('sugerencias');
})->name('sugerencias');

Route::get('/cuenta', function () {
    return view('cuenta');
})->middleware(['auth', 'verified'])->name('cuenta');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware(['guest'])->name('password.request');

Route::resource('user', UserController::class)->middleware(['auth', 'verified']);

Route::resource('question', QuestionController::class)->middleware(['auth', 'verified', 'admin']);

Route::resource('qya', QuestionAnswerController::class)->middleware(['auth', 'verified']);

Route::resource('uya', UserAnswerController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
