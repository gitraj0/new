<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\homecontroller;

Route::get('/',[homecontroller::class,'show_post'])->name('home');

Route::middleware(['auth', 'verified'])->group(function(){

Route::get('/dashboard',[Dashboard::class,'show_post'])->name('dashboard');
Route::get('/post',[postcontroller::class,'index'])->name('post_index');
Route::post('/post',[postcontroller::class,'create'])->name('post_create');
Route::get('/post/edit/{id}',[postcontroller::class,'edit'])->name('post_edit');
Route::put('/post/edit/{id}',[postcontroller::class,'update'])->name('post_update');
Route::get('/post/delete/{id}',[postcontroller::class,'destroy'])->name('post_destroy');

});

require __DIR__.'/auth.php';
