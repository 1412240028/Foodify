<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortalController::class, 'index'])->name('portal');
Route::get('/beranda', [PageController::class, 'beranda']);
Route::get('/kategori', [PageController::class, 'kategori']);
Route::get('/produk', [ProductController::class, 'index']);
Route::get('/profil', [PageController::class, 'profil']);

Route::get('/pendaftaran', [MemberController::class, 'index'])->name('members.index');
Route::get('/pendaftaran/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::post('/pendaftaran', [MemberController::class, 'store'])->name('members.store');
Route::put('/pendaftaran/{member}', [MemberController::class, 'update'])->name('members.update');
Route::delete('/pendaftaran/{member}', [MemberController::class, 'destroy'])->name('members.destroy');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
Route::get('/admin/products/{product}/edit', [AdminController::class, 'editProduct'])->name('admin.products.edit');
Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
Route::put('/admin/products/{product}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
Route::delete('/admin/products/{product}', [AdminController::class, 'destroyProduct'])->name('admin.products.destroy');

Route::get('/admin/members/{member}/edit', [AdminController::class, 'editMember'])->name('admin.members.edit');
Route::post('/admin/members', [AdminController::class, 'storeMember'])->name('admin.members.store');
Route::put('/admin/members/{member}', [AdminController::class, 'updateMember'])->name('admin.members.update');
Route::delete('/admin/members/{member}', [AdminController::class, 'destroyMember'])->name('admin.members.destroy');
