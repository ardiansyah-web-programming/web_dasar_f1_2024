<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     $nama = "Fulan";
//     // return "Halaman Home, nama saya adalah " . $nama;
//     // return "Halaman Home, nama saya adalah $nama";
//     return 'Halaman Home, nama saya adalah ' . $nama;
// });

// Route::get('mahasiswa',function(){
//     return "Halaman Mahasiswa";
// });

Route::get('/',[homeController::class,'index']);

Route::get('mahasiswa',[mahasiswaController::class,'index']);