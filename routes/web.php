<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'post'],function(){
Route::get('/create',  [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/store',  [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/index',  [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/cloudinary', [PostController::class, 'cloudinary']);  //投稿フォームの表示
Route::post('/cloudinary', [PostController::class, 'cloudinary_store']);  //画像保存処理

});