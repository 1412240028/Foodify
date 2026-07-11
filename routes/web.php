<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'beranda']);
Route::get('/beranda', [PageController::class, 'beranda']);
Route::get('/kategori', [PageController::class, 'kategori']);
Route::get('/produk', [ProductController::class, 'index']);
Route::get('/profil', [PageController::class, 'profil']);

Route::get('/pendaftaran', [MemberController::class, 'index'])->name('members.index');
Route::get('/pendaftaran/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::post('/pendaftaran', [MemberController::class, 'store'])->name('members.store');
Route::put('/pendaftaran/{member}', [MemberController::class, 'update'])->name('members.update');
Route::delete('/pendaftaran/{member}', [MemberController::class, 'destroy'])->name('members.destroy');
