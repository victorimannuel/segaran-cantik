<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProfilController;
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

//Route::get('/', function () {
//    return view('auth.login', [
//        "name" => "Kepala Desa",
//        "page" => "Login"
//    ]);
//})->middleware(['auth']);

// profil desa
Route::get('/', function () {
    return view('profil.profil', [ProfilController::class,'getKegiatan']);
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('main.dashboard', [ 'page' => 'Dashboard']);
    })->name('main.dashboard');

    Route::get('/log', [PendudukController::class, 'logView']);

    Route::get('/statistik', function () {
        return view('main.statistik', ['page' => 'Statistik']);
    })->name('main.statistik');

    Route::name('penduduk.')->group(function () {
        Route::any('/dashboard/search', function(){
            return view('main/dashboard', [ 'page' => 'dashboard']);
        })->name('search');
        Route::get('/dashboard/penduduk/tambah/', [PendudukController::class, 'viewCreate']);
        Route::post('/dashboard/penduduk/tambah/', [PendudukController::class, 'store']
        )->name('store');
        Route::get('/dashboard/penduduk/{id_penduduk}/edit', [PendudukController::class, 'viewEdit']
        )->name('edit');
        Route::get('/dashboard/penduduk/{id_penduduk}/read', [PendudukController::class, 'viewRead']
        )->name('read');
        Route::get('/dashboard/penduduk/{id_penduduk}/simpan', function () {
            return view('main.dashboard', ['page' => 'Dashboard']);
        });
        Route::post('/dashboard/penduduk/{id_penduduk}/simpan', [PendudukController::class, 'update']
        )->name('update');
        //Route::get('/dashboard/penduduk/{id_penduduk}/hapus', function () {
        //    return view('main.stastitik', ['page' => 'Dashboard']);
        //});
        Route::any('/dashboard/penduduk/{id_penduduk}/hapus', [PendudukController::class, 'delete']
        )->name('delete');
    });

    // export-import
    Route::get('/export-import',[PendudukController::class,'exportImportView']
    )->name('import-view');
    Route::post('/import',[PendudukController::class,'importPenduduk']
    )->name('import');
    Route::get('/export-penduduk',[PendudukController::class,'exportPenduduk']
    )->name('export-penduduk');

    // log
    Route::get('/dashboard/log', function() {
        return view('penduduk.log', [ 'page' => 'Log Data Perbaikan']);
    });

    // kegiatan
    Route::get('/kegiatan', function () {
        return view('main.kegiatan', [ 'page' => 'Kegiatan']);
    })->name('main.kegiatan');
    Route::name('kegiatan.')->group(function () {
        Route::get('/kegiatan/tambah/', [KegiatanController::class, 'viewCreate']);
        Route::post('/kegiatan/tambah/', [KegiatanController::class, 'store']
        )->name('store');
    });

    // umkm
    Route::get('/umkm', function () {
        return view('main.umkm', [ 'page' => 'UMKM']);
    })->name('main.umkm');

});

require __DIR__.'/auth.php';





//Route::get('/dashboard/kegiatan/{id_kegiatan}/edit', [Kegi::class, 'viewEdit']
//)->name('edit-kegiatan.show');
//Route::get('/dashboard/penduduk/{id_penduduk}/read', [PendudukController::class, 'viewRead']
//)->name('view-kegiatan.show');
//
//Route::get('/dashboard/penduduk/tambah/', [PendudukController::class, 'viewCreate']);
//Route::post('/dashboard/penduduk/tambah/', [PendudukController::class, 'store']
//)->name('penduduk.store');
//
//Route::get('/dashboard/penduduk/{id_penduduk}/simpan', function () {
//    return view('main.dashboard', ['page' => 'Dashboard']);
//});
//Route::post('/dashboard/penduduk/{id_penduduk}/simpan', [PendudukController::class, 'update']
//)->name('penduduk.update');
///*                  */
//
////Route::get('/dashboard/penduduk/{id_penduduk}/hapus', function () {
////    return view('main.stastitik', ['page' => 'Dashboard']);
////});
//Route::any('/dashboard/penduduk/{id_penduduk}/hapus', [PendudukController::class, 'delete']
//)->name('penduduk.delete');
