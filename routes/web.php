<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);
Route::post('posts/{post}', [PostController::class, 'show'])->name('show');
Route::get('/post/{id}/pdf', [PostController::class, 'generatePDF'])->name('post.pdf');


Route::resource('posts', PostController::class);
