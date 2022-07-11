<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DataKegiatanController;
use App\Http\Controllers\DataKepengurusanController;
use App\Http\Controllers\Departemen;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostKegiatanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RekamKegiatanController;
use App\Models\postkegiatan;
use App\Models\RekamKegiatan;
use Illuminate\Support\Facades\Redirect;
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

// Main Route (Home, About, Kegiatan)
    Route::get('/', [DataKegiatanController::class, 'kegiatan']);

    Route::get('/about', function () { return view('about'); });

    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);


    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);

    //kegiatan
    Route::get('/kegiatan', [DataKegiatanController::class, 'Userindex']);
    Route::get('/kepengurusan', [DataKepengurusanController::class, 'Guestindex']);
    Route::get('/kepengurusan/{id_kepengurusan}', [DataKepengurusanController::class, 'Guestshow']);
    Route::get('/departemen/{id_departemen}', [DataKepengurusanController::class, 'departemenShow']);

    //Route User
    Route::group(['middleware' => ['auth', 'hakakses:2']], function () {
    Route::get('/kegiatan/{id_kegiatan}', [DataKegiatanController::class, 'Usershow']); //detail kegiatan
    Route::get('/profile', [AnggotaController::class, 'index'])->name('profile');
    Route::get('/profile/edit/{id_anggota}', [AnggotaController::class, 'showEdit'])->name('edit');
    Route::post('/profile/edit/update/{id_anggota}', [AnggotaController::class, 'update'])->name('update');
    Route::get('/profile/password/{id_anggota}', [AnggotaController::class, 'showEditPassword'])->name('editpw');
    Route::post('/profile/password/change-password/{id_anggota}', [AnggotaController::class, 'updatePassword'])->name('update-password');
    Route::post('/kegiatan/daftar/{id_kegiatan}', [RekamKegiatanController::class, 'store']);
});

// Route Admin
Route::group(['middleware' => ['auth', 'hakakses:1']], function () {
    // Kepengurusan
    Route::get('/admin/kepengurusan', [DataKepengurusanController::class, 'index'])->name('data-kepengurusan');
    Route::get('/admin/kepengurusan/{id_kepengurusan}', [DataKepengurusanController::class, 'show'])->name('show');
    Route::get('/admin/kepengurusan/edit/{id_kepengurusan}', [DataKepengurusanController::class, 'Editshow'])->name('Editshow');
    Route::post('/admin/kepengurusan/store', [DataKepengurusanController::class, 'store'])->name('store');
    Route::post('/admin/kepengurusan/update/{id_kepengurusan}', [DataKepengurusanController::class, 'update'])->name('update');
    Route::get('/admin/kepengurusan/delete/{id_kepengurusan}', [DataKepengurusanController::class, 'destroy'])->name('destroy');

    // Kegiatan
    Route::get('/admin/kegiatan', [DataKegiatanController::class, 'index'])->name('data-kegiatan');
    Route::get('/admin/kegiatan/riwayat-kegiatan', [RekamKegiatanController::class, 'RekamKegiatan'])->name('Rekam');
    Route::get('/admin/kegiatan/riwayat-kegiatan/{id_kegiatan}', [DataKegiatanController::class, 'Excel'])->name('Export');
    Route::get('/admin/kegiatan/{id_kegiatan}', [DataKegiatanController::class, 'show'])->name('show');
    Route::get('/admin/kegiatan/edit/{id_kegiatan}', [DataKegiatanController::class, 'Editshow'])->name('Editshow');
    Route::post('/admin/kegiatan/store', [DataKegiatanController::class, 'store'])->name('store');
    Route::post('/admin/kegiatan/update/{id_kegiatan}', [DataKegiatanController::class, 'update'])->name('update');
    Route::get('/admin/kegiatan/delete/{id_kegiatan}', [DataKegiatanController::class, 'destroy'])->name('destroy');

    Route::get('/admin/departemen', [Departemen::class, 'index'])->name('data-departemen');
    Route::post('/admin/departemen/store', [Departemen::class, 'store'])->name('store');
    Route::get('/admin/departemen/edit/{id_departemen}', [Departemen::class, 'show'])->name('edit-departemen');
    Route::post('/admin/departemen/update/{id_departemen}', [Departemen::class, 'update'])->name('update');
    Route::get('/admin/departemen/delete/{id_departemen}', [Departemen::class, 'destroy'])->name('destroy');

    Route::get('/admin', [AnggotaController::class, 'dashboard'])->name('admin');

    Route::get('/admin/data-kader', [AnggotaController::class, 'indexAdmin'])->name('indexAdmin');
    Route::get('/admin/data-kader/export', [AnggotaController::class, 'export']);
    Route::get('/admin/data-kader/{id_anggota}', [AnggotaController::class, 'show']);
});



