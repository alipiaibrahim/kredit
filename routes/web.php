<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PerhitungganController;
use App\Http\Controllers\SimulasiController;

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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('admin/home', [AdminController::class, 'index'])
    ->name('admin.home')
    ->middleware('is_admin');
Route::get('/simulasi-pinjaman', [SimulasiController::class, 'showSimulationForm'])->name('loan.simulation');
Route::get('admin/user', [AdminController::class, 'index'])
    ->name('admin.home')
    ->middleware('is_admin');


Route::get('admin/nasabah', [NasabahController::class, 'index'])->name('datadiri.show');
Route::get('/nasabah/create', [NasabahController::class, 'create']);
Route::post('/nasabah/store', [NasabahController::class, 'store'])->name('nasabah.store');
Route::get('/nasabah/edit/{id}', [NasabahController::class, 'edit'])->name('nasabah.edit');
Route::patch('/nasabah/update/{id}', [NasabahController::class, 'update'])->name('nasabah.update');
Route::get('/admin/nasabah/delete/{id}', [NasabahController::class, 'destroy'])->name('admin.delete')->middleware('is_admin');


Route::get('admin/akun', [UserController::class, 'index'])->name('akun.show');
Route::get('/akun/create', [UserController::class, 'create'])->name('akun.create');
Route::post('akun/store', [UserController::class, 'store'])->name('akun.store');
Route::get('/akun/{id}/edit', [UserController::class, 'edit'])->name('akun.edit');
Route::patch('/akun/{id}', [UserController::class, 'update'])->name('akun.update');
Route::get('/admin/akun/delete/{id}', [UserController::class, 'destroy'])->name('akun.delete')->middleware('is_admin');

Route::get('admin/kriteria', [KriteriaController::class, 'index'])->name('kriteria.show');
Route::get('/kriteria/{id}/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');
Route::patch('/kriteria/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
// Route::post('/hitung', [KriteriaController::class, 'hitung'])->name('kriteria.ubah');
Route::get('admin/pinjaman', [SimulasiController::class, 'index'])->name('pinjaman.index');
Route::post('/pinjaman/simulasi', [SimulasiController::class, 'simulasi'])->name('pinjaman.simulasi');

Route::get('admin/perhitungan', [PerhitungganController::class, 'index'])->name('akun.show');
Route::get('/perhitungan/create', [PerhitungganController::class, 'create'])->name('perhitungan.create');
Route::post('perhitungan/store', [PerhitungganController::class, 'store'])->name('perhitungan.store');
