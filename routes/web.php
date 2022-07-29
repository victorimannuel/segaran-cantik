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
});

Route::get('/dashboard', function () {
    return view('main.dashboard', [ 'page' => 'dashboard']);
})->middleware(['auth'])->name('main.dashboard');

Route::get('/notif', function () {
    return view('main.components.notif');
});

Route::get('/statistik', function () {
    return view('main.statistik', [ 'page' => 'statistik']);
})->middleware(['auth'])->name('main.statistik');

Route::get('/edit-penduduk/{id_penduduk}', [PendudukController::class, 'editForm']
)->name('edit-penduduk.show');
Route::get('/tambah-penduduk', [PendudukController::class, 'createForm']
);
Route::post('/tambah-penduduk', [PendudukController::class, 'store']
)->name('penduduk.store');

Route::get('/list-penduduk', [PendudukController::class, 'show_data']
)->name('list-penduduk.show');
//Route::post('/list-penduduk', [PendudukController::class, 'store']
//)->name('penduduk.store');

Route::any('/search',function(){
//    $q = Input::get ( 'q' );
//    $user = Input::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
//    if(count($user) > 0)
//        return view('welcome')->withDetails($user)->withQuery ( $q );
//    else return view ('welcome')->withMessage('No Details found. Try to search again !');
    return view('main/dashboard');
});

require __DIR__.'/auth.php';
