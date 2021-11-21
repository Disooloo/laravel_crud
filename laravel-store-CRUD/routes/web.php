<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

//admins NOT role

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('administrator');
    Route::resource('post', PostController::class);
});
