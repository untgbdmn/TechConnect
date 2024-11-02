<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('students')->group(function () {
    Route::get('/list', [SiswaController::class, 'index'])->name('siswa.list');
    Route::get('/detail/{siswa_id}', [SiswaController::class, 'show'])->name('siswa.detail');
    Route::get('/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/add', [SiswaController::class, 'store'])->name('siswa.add');
});

Route::prefix('class')->group(function () {
    Route::get('/list', [KelasController::class, 'list'])->name('kelas.list');
    Route::get('/create', [KelasController::class, 'create'])->name('kelas.create');
    Route::post('/create/add', [KelasController::class, 'store'])->name('kelas.store');
});

require __DIR__.'/auth.php';
