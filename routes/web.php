<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/login','login');
Route::view('/','home');
// Route::middleware(['login'])->group(function () {  
    Route::post('/login',[UserController::class,'login'])->name('login');

    
Route::view('/signup','signup');
Route::post('/signup',[UserController::class,'signup'])->name('signup');
Route::post('/create',[PostController::class,'create'])->name('create');
Route::get('/createpost',[UserController::class,'createpost'])->name('createpost');
Route::get('feedlisting',[PostController::class,'displayfeed'])->name('feedlisting');
Route::get('mypost',[PostController::class,'mypost'])->name('mypost');
Route::get('/comment/{id}',[CommentController::class,'comment']);
Route::get('/addcomment/{id}',[CommentController::class,'addcomment']);    
Route::get('/updatecomment',[CommentController::class,'updatecomment']);
Route::get('/deletepost/{id}',[PostController::class,'deletepost']);
Route::get('/updatepost/{id}',[PostController::class,'updatepost']);
Route::get('/updatecomplete/{id}',[PostController::class,'updatecomplete']);
// });
