<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PendudukController;

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
})->middleware(['auth'])->name('dashboard');

Route::get('/form-penduduk', [PendudukController::class, 'createForm']
)->name('form-penduduk.show');
Route::post('/form-penduduk', [PendudukController::class, 'store']
)->name('penduduk.store');

Route::get('/list-penduduk', [PendudukController::class, 'show_data']);
//Route::post('/list-penduduk', [PendudukController::class, 'store']
//)->name('penduduk.store');

require __DIR__.'/auth.php';
