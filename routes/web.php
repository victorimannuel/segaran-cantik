<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Input;

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
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('main.dashboard', [ 'page' => 'Dashboard']);
})->middleware(['auth'])->name('main.dashboard');

Route::get('/notif', function () {
    return view('main.components.notif');
});

Route::get('/statistik', function () {
    return view('main.statistik', [ 'page' => 'Statistik']);
})->middleware(['auth'])->name('main.statistik');

/* versi yang baru */
Route::get('/dashboard/penduduk/{id_penduduk}/edit', [PendudukController::class, 'editForm']
)->name('edit-penduduk.show');
Route::get('/dashboard/penduduk/{id_penduduk}/read', [PendudukController::class, 'readOnlyForm']
)->name('view-penduduk.show');

Route::get('/dashboard/penduduk/tambah/', [PendudukController::class, 'createForm']);
Route::post('/dashboard/penduduk/tambah/', [PendudukController::class, 'store']
)->name('penduduk.store');

Route::post('/dashboard/{id_penduduk}/simpan', [PendudukController::class, 'update']
)->name('penduduk.update');
/*                  */

//Route::get('/list-penduduk', [PendudukController::class, 'show_data']
//)->name('list-penduduk.show');
//Route::post('/list-penduduk', [PendudukController::class, 'store']
//)->name('penduduk.store');

Route::any('/search', function(){
    return view('main/dashboard', [ 'page' => 'dashboard']);
});

Route::any('/dashboard/search', function(){
    return view('main/dashboard', [ 'page' => 'dashboard']);
});

Route::get('/export-import',[PendudukController::class,'importView'])->name('import-view');
Route::post('/import',[PendudukController::class,'import'])->name('import');
Route::get('/export-penduduk',[PendudukController::class,'exportPenduduk'])->name('export-penduduk');

require __DIR__.'/auth.php';
