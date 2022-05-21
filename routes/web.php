<?php

use App\Http\Controllers\DataKegiatanController;
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
Route::get('/kegiatan',[DataKegiatanController::class, 'UserKegiatan']);
Route::get('/kegiatan/{slug}', [DataKegiatanController::class, 'show']); //detail kegiatan


// Route Admin
Route::get('/admin', function(){
    return view('admin.dashboard');
});

Route::get('/admin/kegiatan',[DataKegiatanController::class,'AdminKegiatan']);

Route::get('/admin/data-kader', function(){
    return view('admin.data-kader');
});

Route::get('/admin/kepengurusan', function(){
    return view('admin.data-kepengurusan');
});

Route::get('/admin/departemen', function(){
    return view('admin.data-departemen');
});
