<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\bannerController;

use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'admin')->prefix('admin')->name('admin.')->group(function(){
Route::get('dasboard',[AdminController::class, 'index'])
->name('dasboard');

Route::get('/admin/banner', [bannerController::class, 'index'])->name('admin.banner');

});
