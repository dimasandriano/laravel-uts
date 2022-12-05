<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

// Route Manual
// Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
// Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
// Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
// Route::get('/buku/show/{id}', [BukuController::class, 'show'])->name('buku.show');
// Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
// Route::post('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');
Route::get('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::get('/', function(){
    return view('pages.home');
});

// Route Resource
Route::resource('/buku', BukuController::class)->except(['destroy']);