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
Route::get('/', [BukuController::class, 'index'])->name('index');
Route::get('/create', [BukuController::class, 'create'])->name('create');
Route::post('/store', [BukuController::class, 'store'])->name('store');
Route::get('/show/{id}', [BukuController::class, 'show'])->name('show');
Route::get('/edit/{id}', [BukuController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [BukuController::class, 'update'])->name('update');
Route::get('/delete/{id}', [BukuController::class, 'destroy'])->name('destroy');

//Dashboard
Route::get('/dashboard', [BukuController::class, 'dashboard']);

//about
Route::get('/about', function(){
    return view('pages.about');
});

// // Route Resource
// Route::resource('/buku', BukuController::class)->except(['destroy','index']);