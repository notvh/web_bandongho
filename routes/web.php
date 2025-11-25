<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\AuthDangKy;
use App\Http\Controllers\AuthDangNhap;


use App\Http\Controllers\bannerController;
use App\Http\Controllers\ChiTietSanPhamCtr;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LienHeController;
use App\Http\Controllers\LoginGG;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\UserConTroller;
use App\Http\Controllers\UsersController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\GoogleSessionExpire;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/about', 'about');
});
Route::get('/users', [UserConTroller::class, 'index'])->middleware('access.time');

Route::prefix('users')->controller(UsersController::class)->group(function () {
    Route::get('/', 'index')->name('users.index');
    Route::get('/create', 'create')->name('users.create'); // Tên đầy đủ là 'users.create'
    Route::post('/store', 'store')->name('users.store');
});

Route::prefix('posts')->controller(PostController::class)
    ->name('posts.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'edit')->name('edit');
        route::put('/{id}', 'update')->name('update');
        Route::get('/{id}/delete', 'delete')->name('delete');
    });


Route::get('sanpham', [SanPhamController::class, 'sanpham'])->name('sanpham');
Route::get('lienhe', [LienHeController::class, 'lienhe'])->name('lienhe');
Route::get('chitietsanpham', [ChiTietSanPhamCtr::class, 'chitietsanpham'])->name('chitietsanpham');
Route::middleware('auth')->get('giohang', [GioHangController::class, 'giohang'])->name('giohang');

Route::get('dangky', [AuthDangKy::class, 'dangky']);
Route::post('dangky', [AuthDangKy::class, 'postdangky'])->name('postdangky');
Route::get('dangnhap', [AuthDangKy::class, 'dangnhap'])->name('login');
Route::post('dangnhap', [AuthDangKy::class, 'postdangnhap'])->name('postdangnhap');
Route::get('dangxuat', [AuthDangKy::class, 'dangxuat'])->name('dangxuat');

// Dang nhap voi google google
// Route::get('/auth/google-old', [AuthDangKy::class, 'redirectToGoogle'])->name('auth.google.old');
// Route::get('/auth/google-old/callback', [AuthDangKy::class, 'handleGoogleCallback']);
// v2
Route::middleware('google.guest')->prefix('auth/google')->name('auth.')->group(function () {
    Route::get('/', [SocialiteController::class, 'redirectGoogle'])->name('google');
    Route::get('/callback', [SocialiteController::class, 'callbackGoogle']);
});
