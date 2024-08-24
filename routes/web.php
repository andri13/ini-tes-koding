<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerhitunganController;


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

Route::get('/', [App\Http\Controllers\PerhitunganController::class, 'index'])->name('home');

Route::prefix('perhitungan')->group(function () {
    Route::post('/store', [App\Http\Controllers\PerhitunganController::class, 'store'])->name('perhitungan.store');
    Route::put('/update/{id}', [App\Http\Controllers\PerhitunganController::class, 'update'])->name('perhitungan.update');
    Route::get('/delete/{id}', [App\Http\Controllers\PerhitunganController::class, 'delete'])->name('perhitungan.delete');
});
