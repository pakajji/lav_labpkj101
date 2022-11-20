<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('check'); 