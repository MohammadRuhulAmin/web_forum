<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CommentController;
use App\Models\Thread;
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
    $threads = Thread::paginate(15);
    return view('welcome',compact('threads'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('thread',ThreadController::class);

Route::resource('comment',CommentController::class);

Route::post('comment/create/{thread}',[App\Http\Controllers\CommentController::class,'addThreadComment'])
    ->name('threadcomment.store');

Route::post('reply/create/{comment}',[App\Http\Controllers\CommentController::class,'addReplyComment'])
    ->name('replycomment.store');
