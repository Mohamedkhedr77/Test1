<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;    




Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}',[PostController::class, 'show'])->name('posts.show');
Route::get('/posts/create/{id}',[postController::class,'create'])->name('posts.create');



// 1-route
// 2-controller
// 3-view
// 4-design