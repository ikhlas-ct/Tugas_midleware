<?php

use App\Http\Controllers\KucingController;
use App\Http\Controllers\KucingControllerPost;
use App\Http\Controllers\KucingControllerProduct;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kucing-amademy', [KucingControllerProduct::class, 'index'])->name('kucing-amademy');

Route::get('postst',[KucingControllerPost::class,'index'])->name('posts.index');


Route::get('posts/create', [KucingControllerPost::class, 'create'])->name('posts.create');
Route::post('posts/store', [KucingControllerPost::class, 'store'])->name('posts.store');
Route::delete('posts/{id}/destroy', [KucingControllerPost::class, 'delete'])->name('posts.destroy');
Route::get('/form-kucing', [KucingController::class, 'getForm'])->name('form_kucing');
Route::post('/form-kucing', [KucingController::class, 'sendRequest']);
Route::get('/form', [KucingController::class, 'getForm'])->name('get_form');
Route::get('/admin/{user}/list-products', [UserController::class, 'getAdmin'])->name('admin_page');


Route::get('posts/{id}/edit', [KucingControllerPost::class, 'edit'])->name('posts.edit');
Route::put('posts/{id}/update', [KucingControllerPost::class, 'update'])->name('posts.update');
