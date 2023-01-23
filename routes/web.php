<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuditBiayaIklan\FormPelaporanController;
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
  
  Route::get('/form_pelaporan_ac', [FormPelaporanController::class, 'indexAkuisisi'])->name('form_pelaporan_ac');
  Route::post('/post_pelaporan_ac', [FormPelaporanController::class, 'storePelaporanAkuisisi'])->name('post_pelaporan_ac');
  
  Route::get('/form_pelaporan_mp', [FormPelaporanController::class, 'indexMP'])->name('form_pelaporan_mp');
  Route::post('/post_pelaporan_mp', [FormPelaporanController::class, 'storePelaporanMP'])->name('post_pelaporan_mp');  
  
  Route::post('/post_store_toko', [FormPelaporanController::class, 'storeToko'])->name('post_toko');
  Route::delete('/toko_delete/{id}', [FormPelaporanController::class, "deleteToko"])->name("delete_toko");
  
  Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});
