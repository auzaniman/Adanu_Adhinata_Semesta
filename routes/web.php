<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuditBiayaIklan\FormPelaporanController;
use App\Http\Controllers\AuditBiayaIklan\FormPengajuanController;
use App\Http\Controllers\Finance\AuditController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Profile\ProfileController;

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
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(["admin"])
->prefix("admin")
->namespace("Admin")
->group(function () {

  Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard');

  // FORM PELAPORAN & PENGAJUAN
  Route::get('/form_pelaporan_ac', [FormPelaporanController::class, 'indexAkuisisi'])->name('form_pelaporan_ac');
  Route::post('/post_pelaporan_ac', [FormPelaporanController::class, 'storePelaporanAkuisisi'])->name('post_pelaporan_ac');

  Route::get('/form_pelaporan_mp', [FormPelaporanController::class, 'indexMP'])->name('form_pelaporan_mp');
  Route::post('/post_pelaporan_mp', [FormPelaporanController::class, 'storePelaporanMP'])->name('post_pelaporan_mp');

  Route::post('/post_store_toko', [FormPelaporanController::class, 'storeToko'])->name('post_toko');
  Route::delete('/toko_delete/{id}', [FormPelaporanController::class, "deleteToko"])->name("delete_toko");

  Route::get('/form_pengajuan_ac', [FormPengajuanController::class, 'indexAkuisisi'])->name('form_pengajuan_ac');
  Route::post('/post_pengajuan_ac', [FormPengajuanController::class, 'storePengajuanAkuisisi'])->name('post_pengajuan_ac');

  // FINANCE
  Route::get('/audit_iklan', [AuditController::class, 'index'])->name('audit_iklan');
  Route::get('/dana_acc', [AuditController::class, 'indexDataDana'])->name('data_dana_acc');
  Route::get('/audit_iklan_show/{id}', [AuditController::class, 'showAuditAkuisisi'])->name('show_audit_akuisisi');
  Route::get('/dana_acc_show/{id}', [AuditController::class, 'showDanaACC'])->name('show_dana_acc');
  Route::post('/post_audit_akuisisi', [AuditController::class, 'storeAuditAkuisisi'])->name('post_audit_akuisisi');
  Route::put('/update_audit_akuisisi/{id}', [AuditController::class, 'updateAuditAkuisisi'])->name('update_audit_akuisisi');
  Route::get('/cetak_pengajuan', [AuditController::class, 'indexCetakPengajuan'])->name('cetak_pengajuan');
  Route::get('/statistik_iklan', [AuditController::class, 'indexStatistikIklan'])->name('statistik_iklan');

  Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});
