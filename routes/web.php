<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SuratKeteranganController;
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

// Route::get('/', function () {
//     return view('dashboard.templates.index');
// });

Route::get('/daftar', [AuthController::class,'register'])->name('register');
Route::get('/masuk', [AuthController::class,'login'])->name('login');

Route::post('/daftar', [AuthController::class, 'doRegister'])->name('register.do');
Route::post('/masuk', [AuthController::class, 'doLogin'])->name('login.do');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk');
    Route::get('/penduduk/{id}', [PendudukController::class, 'show'])->name('penduduk.show');
    Route::post('/penduduk/{id}/confirm', [PendudukController::class, 'confirm'])->name('penduduk.confirm');
    Route::delete('/penduduk/{id}', [PendudukController::class, 'delete'])->name('penduduk.delete');

    Route::prefix('surat-keterangan')->group(function(){
        Route::get('domisili', [SuratKeteranganController::class, 'domisili'])->name('sk.domisili');
        // Route::get('domisili-pdf', [SuratKeteranganController::class, 'domisiliPdf'])->name('sk.domisili.pdf');
        Route::get('domisili/view', [SuratKeteranganController::class, 'domisiliPdfView'])->name('sk.domisili.pdf.view');
        Route::prefix('tidak-mampu')->group(function(){
            Route::get('/', [SuratKeteranganController::class, 'tidakMampu'])->name('sk.tidak-mampu');
            Route::get('/view', [SuratKeteranganController::class, 'tidakMampuPdfView'])->name('sk.tidak-mampu.pdf.view');
        });
        Route::prefix('pindah')->group(function(){
            Route::get('/', [SuratKeteranganController::class, 'pindah'])->name('sk.pindah');
            Route::get('/view', [SuratKeteranganController::class, 'pindahPdfView'])->name('sk.pindah.pdf.view');
        });
        Route::prefix('izin-usaha')->group(function(){
            Route::get('/', [SuratKeteranganController::class, 'izinUsaha'])->name('sk.izin-usaha');
            Route::get('/view', [SuratKeteranganController::class, 'izinUsahaPdfView'])->name('sk.izin-usaha.pdf.view');
        });
        Route::prefix('penghasilan-orang-tua')->group(function(){
            Route::get('/', [SuratKeteranganController::class, 'penghasilanOrangTua'])->name('sk.penghasilan-orangtua');
            Route::get('/view', [SuratKeteranganController::class, 'penghasilanOrangTuaPdfView'])->name('sk.penghasilan-orangtua.pdf.view');
        });
    });
});
