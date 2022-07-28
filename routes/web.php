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
    return view('auth.login', [
        "name" => "Kepala Desa",
        "page" => "Login"
    ]);
});

Route::get('/dashboard', function () {
    return view('main.dashboard');
})->middleware(['auth'])->name('main.dashboard');

Route::get('/statistik', function () {
    return view('main.statistik');
})->middleware(['auth'])->name('main.statistik');

Route::get('/edit-penduduk/{penduduk}', [PendudukController::class, 'editForm']
)->name('edit-penduduk.show');
Route::get('/tambah-penduduk', [PendudukController::class, 'createForm']
);
Route::post('/tambah-penduduk', [PendudukController::class, 'store']
)->name('penduduk.store');

Route::get('/list-penduduk', [PendudukController::class, 'show_data']
)->name('list-penduduk.show');
//Route::post('/list-penduduk', [PendudukController::class, 'store']
//)->name('penduduk.store');

require __DIR__.'/auth.php';
