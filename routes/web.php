<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetshopController;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::prefix('/petshop')->name('pets.')->group(function () {
    Route::get('/data', [PetshopController::class, 'index'])->name('index');
    Route::get('/create', [PetshopController::class, 'create'])->name('tambah');
    Route::post('/store', [PetshopController::class, 'store'])->name('tambah.proses');
    Route::get('/{id}', [PetshopController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [PetshopController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [PetshopController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PetshopController::class, 'destroy'])->name('delete');
});

Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
});
