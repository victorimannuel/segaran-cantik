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
    return view('auth.login', [
        "name" => "Kepala Desa", 
        "page" => "Login"
    ]);
});

Route::get('/dashboard', function () {
    return view('main.dashboard');
})->middleware(['auth'])->name('main.dashboard');


Route::get('/notif', function () {
    return view('main.components.notif');
});

Route::get('/statistik', function () {
    return view('main.statistik');
})->middleware(['auth'])->name('main.statistik');

require __DIR__.'/auth.php';