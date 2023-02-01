<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::delete('/posts',[PostController::class,'destroy'])->name("posts.destroy");
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{postId}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

