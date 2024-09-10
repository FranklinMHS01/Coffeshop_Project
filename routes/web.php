<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/loginaction', [UserController::class, 'login'])->name('admin.login');

// Route::resource('menu', MenuController::class)->middleware([AdminMiddleware::class]);
// Route::resource('user', UserController::class)->middleware([AdminMiddleware::class]);

Route::resource('user', UserController::class);
Route::resource('menu', MenuController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::resource('pemesanan', PemesananController::class);

Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::get('/allmenu', [NavigationController::class, 'allmenu'])->name('allmenu');
Route::get('/about', [NavigationController::class, 'about'])->name('about');
Route::get('/contact', [NavigationController::class, 'contact'])->name('contact');
