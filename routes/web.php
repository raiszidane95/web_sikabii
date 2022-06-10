<?php

use App\Http\Controllers\DataKegiatanController;
use App\Http\Controllers\DataKepengurusanController;
use App\Http\Controllers\Departemen;
use App\Http\Controllers\PostKegiatanController;
use App\Models\postkegiatan;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function(){
    return view('profile');
});

//kegiatan
Route::get('/kegiatan',[DataKegiatanController::class, 'Userindex']);
Route::get('/kegiatan/{id_kegiatan}', [DataKegiatanController::class, 'Usershow']); //detail kegiatan


// Route Admin
Route::get('/admin', function(){
    return view('admin.dashboard');
});

Route::get('/admin/data-kader', function(){
    return view('admin.data-kader');
});

// Kepengurusan
Route::get('/admin/kepengurusan', [DataKepengurusanController::class, 'index'])->name('data-kepengurusan');
Route::get('/admin/kepengurusan/{id_kepengurusan}', [DataKepengurusanController::class, 'show'])->name('show');
Route::get('/admin/kepengurusan/edit/{id_kepengurusan}', [DataKepengurusanController::class, 'Editshow'])->name('Editshow');
Route::post('/admin/kepengurusan/store', [DataKepengurusanController::class, 'store'])->name('store');
Route::post('/admin/kepengurusan/update/{id_kepengurusan}', [DataKepengurusanController::class, 'update'])->name('update');
Route::get('/admin/kepengurusan/delete/{id_kepengurusan}', [DataKepengurusanController::class, 'destroy'])->name('destroy');

// Kegiatan

Route::get('/admin/kegiatan', [DataKegiatanController::class, 'index'])->name('data-kegiatan');
Route::get('/admin/kegiatan/{id_kegiatan}', [DataKegiatanController::class, 'show'])->name('show');
Route::get('/admin/kegiatan/edit/{id_kegiatan}', [DataKegiatanController::class, 'Editshow'])->name('Editshow');
Route::post('/admin/kegiatan/store', [DataKegiatanController::class, 'store'])->name('store');
Route::post('/admin/kegiatan/update/{id_kegiatan}', [DataKegiatanController::class, 'update'])->name('update');
Route::get('/admin/kegiatan/delete/{id_kegiatan}', [DataKegiatanController::class, 'destroy'])->name('destroy');

Route::get('/admin/departemen', [Departemen::class, 'index'])->name('data-departemen');
Route::post('/admin/departemen/store', [Departemen::class, 'store'])->name('store');

