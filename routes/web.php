<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('homepage');
});
Route::view('/loginpage','loginpage');
Route::view('/registerpage','registerpage');
Route::view('/welcomepage','welcomepage');
Route::get('/welcomepage', function () {
    $posts=Post::where('user_id',Auth::id())->get();
    return view('welcomepage',['posts'=>$posts]);
});
Route::post('/register',[UserController::class,'register']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/login',[UserController::class,'login']);

//post related posts
Route::post('/create_post',[PostController::class,'createpost'])->middleware('auth');
Route::delete('/delete/{post}',[PostController::class,'destroy']);
Route::get('/edit_post/{post}',[PostController::class,'editscreen'])->name('post.edit');
Route::put('/edit_post/{post}', [PostController::class, 'actualUpdate'])->name('post.update');