<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home/{nama?}', function (Request $request) {

//     $nama = $request ->nama;
//     return view('home', compact('nama'));
// })->name('home');


Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('add-siswa', [SiswaController::class,'add'])->name('siswa.add');
Route::post('add-siswa', [SiswaController::class, 'store'])->name('siswa.add.process');
Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
Route::get('siswa/edit/{id}', [SiswaController::class,'edit'])->name('siswa.edit');

Route::get('home', [SiswaController::class, 'home'])->name('siswa.home');
Route::get('about', [SiswaController::class, 'about'])->name('siswa.about');

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});


