<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\UserAnswerController;
use App\Http\Controllers\CategoryController;


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
})->name('welcome');

Route::get('/dashboard', [UserAnswerController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/game', function () {
    return view('game');
})->middleware(['auth', 'verified'])->name('game');

Route::get('/sugerencias', function () {
    return view('sugerencias');
})->name('sugerencias');

Route::get('/cuenta', function () {
    return view('cuenta');
})->middleware(['auth', 'verified'])->name('cuenta');

Route::get('/prejuego', function () {
    return view('prejuego');
})->middleware(['auth', 'verified'])->name('prejuego');

Route::get('/ranking', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('ranking');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware(['guest'])->name('password.request');

Route::resource('user', UserController::class)->middleware(['auth', 'verified']);

Route::resource('question', QuestionController::class)->middleware(['auth', 'verified', 'admin']);

Route::resource('qya', QuestionAnswerController::class)->middleware(['auth', 'verified']);

Route::resource('uya', UserAnswerController::class)->middleware(['auth', 'verified']);

Route::resource('category', CategoryController::class);

require __DIR__.'/auth.php';
