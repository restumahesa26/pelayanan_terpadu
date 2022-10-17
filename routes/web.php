<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EPosbakumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HukumController;
use App\Http\Controllers\InformasiPengaduanController;
use App\Http\Controllers\PerdataController;
use App\Http\Controllers\PidanaController;
use App\Http\Controllers\RentaDisabilitasController;
use App\Http\Controllers\UmumController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/home', [HomeController::class, 'home2'])->name('home2');

Route::get('/jenis-layanan', [HomeController::class, 'layanan'])->name('layanan');

Route::get('/jenis-layanan/umum/', [HomeController::class, 'umum'])->name('umum');

Route::get('/jenis-layanan/pidana/', [HomeController::class, 'pidana'])->name('pidana');

Route::get('/jenis-layanan/pidana/cek-tilang', [HomeController::class, 'cek_tilang'])->name('pidana.cek-tilang');

Route::get('/jenis-layanan/perdata/', [HomeController::class, 'perdata'])->name('perdata');

Route::get('/jenis-layanan/hukum/', [HomeController::class, 'hukum'])->name('hukum');

Route::get('/jenis-layanan/informasi-pengaduan/', [HomeController::class, 'informasi_pengaduan'])->name('informasi-pengaduan');

Route::get('/jenis-layanan/informasi-pengaduan/informasi', [HomeController::class, 'informasi'])->name('informasi');

Route::get('/jenis-layanan/informasi-pengaduan/pengaduan', [HomeController::class, 'pengaduan'])->name('pengaduan');

Route::get('/jenis-layanan/e-posbakum/', [HomeController::class, 'e_posbakum'])->name('e-posbakum');

Route::get('/jenis-layanan/e-posbakum/masuk/', [HomeController::class, 'e_posbakum_2'])->name('e-posbakum-2');

Route::get('/jenis-layanan/e-posbakum/masuk/pelayanan-offline', [HomeController::class, 'e_posbakum_offline'])->name('e-posbakum-offline');

Route::get('/jenis-layanan/e-posbakum/masuk/pelayanan-online', [HomeController::class, 'e_posbakum_online'])->name('e-posbakum-online');

Route::get('/jenis-layanan/e-posbakum/masuk/pelayanan-disabilitas-renta', [HomeController::class, 'e_posbakum_disabilitas'])->name('e-posbakum-disabilitas');

Route::get('/jenis-layanan/layanan-disabilitas-renta/', [HomeController::class, 'disabilitas'])->name('disabilitas');

Route::get('/jenis-layanan/layanan-disabilitas-renta/fasilitas-disabilitas-renta', [HomeController::class, 'fasilitas_disabilitas'])->name('disabilitas.fasilitas-disabilitas');

Route::get('/jenis-layanan/layanan-disabilitas-renta/perdata-voluntair', [HomeController::class, 'perdata_voluntair'])->name('disabilitas.voluntair');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::resource('umum', UmumController::class)->middleware(['auth']);

Route::resource('pidana', PidanaController::class)->middleware(['auth']);

Route::resource('perdata', PerdataController::class)->middleware(['auth']);

Route::resource('hukum', HukumController::class)->middleware(['auth']);

Route::resource('informasi-pengaduan', InformasiPengaduanController::class)->middleware(['auth']);

Route::resource('e-posbakum', EPosbakumController::class)->middleware(['auth']);

Route::resource('renta-disabilitas', RentaDisabilitasController::class)->middleware(['auth']);

Route::resource('buku-tamu', BukuTamuController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
