<?php

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
    return view('welcome');
});

<<<<<<< HEAD



Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    


=======

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'backend.index')->name('dashboard');
>>>>>>> 18ccbe3b554ca0cae83a32a0193c7a3763dbdfec
});

require __DIR__.'/auth.php';