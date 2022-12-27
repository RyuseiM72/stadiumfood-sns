<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//　投稿用のルート
Route::prefix('post')->group(function () 
{
    Route::get('/create',  [PostController::class, 'create'])->name('post.create');
    Route::post('/store',  [PostController::class, 'store'])->name('post.store');
    Route::get('/index',  [PostController::class, 'index'])->name('post.index');
    Route::get('/edit/{id}',  [PostController::class, 'edit'])->name('post.edit');
    Route::get('/show/{id}',  [PostController::class, 'show'])->name('post.show');
    Route::post('/update/{id}',  [PostController::class, 'update'])->name('post.update');
    Route::post('/destroy/{id}', [PostController::class,'destroy'])->name('post.destroy');
    
    Route::get('/cloudinary', [PostController::class, 'cloudinary']);  //投稿フォームの表示
    Route::post('/cloudinary', [PostController::class, 'cloudinary_store']);  //画像保存処理

});

Route::post('/posts/{post}/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

Route::get('login/google', [LoginController::class,"redirectToGoogle",]);
Route::get('login/google/callback', [LoginController::class,"handleGoogleCallback"]);

Route::post('/{id}/favorite', [FavoriteController::class, 'store'])->name('favorites.favorite');
Route::delete('/{id}/unfavorite', [FavoriteController::class, 'destroy'])->name('favorites.unfavorite');

Route::post('users/{user}/follow', [UserController::class, 'follow'])->name('follow');
Route::delete('users/{user}/unfollow',[UserController::class, 'unfollow'])->name('unfollow');

Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
