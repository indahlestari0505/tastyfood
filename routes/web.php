<?php

use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;

// Halaman website untuk user
Route::view('/', 'pages.home')->name('home');
Route::view('/tentang', 'pages.about')->name('about');
Route::view('/berita', 'pages.news')->name('news');
Route::view('/galeri', 'pages.gallery')->name('gallery');
Route::view('/kontak', 'pages.contact')->name('contact');

Route::post(
    '/kontak',
    [ContactMessageController::class, 'store']
)->name('contact.store');

// Halaman login admin
Route::get(
    '/admin/login',
    [AdminController::class, 'showLogin']
)->name('admin.login');

Route::post(
    '/admin/login',
    [AdminController::class, 'login']
)->middleware('throttle:5,1')->name('admin.login.process');

// Halaman yang hanya boleh diakses admin
Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin')
    ->group(function () {
        Route::get(
            '/',
            [AdminController::class, 'dashboard']
        )->name('dashboard');

        Route::post(
            '/logout',
            [AdminController::class, 'logout']
        )->name('logout');

        Route::resource('news', NewsController::class);
    });