<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dokter\DokterController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Pelayanan\PelayananController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('belum_login')->group(function(){
//untuk tampilan login dan register
    Route::get('/',[LoginController::class,'index'])->name('login');
    Route::get('/register',[LoginController::class,'register'])->name('register');
    Route::post('/proses.register',[LoginController::class,'save'])->name('proses.register');
    Route::post('/proses.login',[LoginController::class,'store'])->name('proses.login');
});

Route::middleware('sudah_login')->group(function(){
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    //proses dan tampilan home
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/tambah.pasien',[HomeController::class,'tambah'])->name('tambah.pasien');
    Route::post('/pasien.simpan',[HomeController::class,'simpan'])->name('simpan.pasien');
    Route::get('/edit.pasein/{id}',[HomeController::class,'edit'])->name('edit.pasien');
    Route::post('/update.pasien/{id}',[HomeController::class,'update'])->name('update.pasien');
    Route::get('/delete.pasien/{id}',[HomeController::class,'delete'])->name('delete.pasien');

    //proses dokter
    Route::get('/dokter',[DokterController::class,'index'])->name('dokter');
    Route::get('/dokter.tambah',[DokterController::class,'tambah'])->name('dokter.tambah');
    Route::post('/dokter.save',[DokterController::class,'save'])->name('dokter.save');
    Route::get('/dokter.edit/{id}',[DokterController::class,'edit'])->name('dokter.edit');
    Route::post('/dokter.update/{id}',[DokterController::class,'update'])->name('dokter.update');
    Route::get('/dokter.delete/{id}',[DokterController::class,'delete'])->name('dokter.delete');

    //pelayanan
    Route::get('/pelayanan',[PelayananController::class,'index'])->name('pelayanan');
    Route::get('/pelayanan.tambah',[PelayananController::class,'tambah'])->name('pelayanan.tambah');
    Route::post('/pelayanan.save',[PelayananController::class,'save'])->name('pelayanan.save');
    Route::get('/pelayanan.edit/{id}',[PelayananController::class,'edit'])->name('pelayanan.edit');
    Route::post('/pelayanan.update/{id}',[PelayananController::class,'update'])->name('pelayanan.update');
    Route::get('/pelayanan.delete/{id}',[PelayananController::class,'delete'])->name('pelayanan.delete');

});

