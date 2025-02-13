<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopicController;
use App\Models\Fashion;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/authregister', [LoginController::class, 'addregister']);
Route::post('/auth', [LoginController::class, 'auth']);

Route::middleware(['login:Admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'show']);
    Route::get('/create', [BlogController::class, 'create']);
    Route::post('/add', [BlogController::class, 'add']);
    Route::get('/update/{id}', [BlogController::class, 'edit']);
    Route::post('/update/{id}', [BlogController::class, 'update']);
    Route::get('/delete/{id}', [BlogController::class, 'delete']);

    // Route::get('/topic', [TopicController::class, 'show']);
    // Route::get('/create_topic', [TopicController::class, 'create']);
    // Route::post('/create_topic', [TopicController::class, 'add']);
    // Route::get('/update_topic/{id}', [TopicController::class, 'edit']);
    // Route::post('/update_topic/{id}', [TopicController::class, 'update']);
    // Route::get('/delete_topic/{id}', [TopicController::class, 'delete']);

    // Route::get('/fashion', [FashionController::class, 'show']);
    // Route::get('/create_fashion', [FashionController::class, 'create']);
    // Route::post('/create_fashion', [FashionController::class, 'add']);
    // Route::get('/update_fashion/{id}', [FashionController::class, 'edit']);
    // Route::post('/update_fashion/{id}', [FashionController::class, 'update']);
    // Route::get('/delete_fashion/{id}', [FashionController::class, 'delete']);
});

Route::middleware(['login:User'])->group(function () {
    Route::get('/show', [BlogController::class, 'index']);
    Route::get('/detail/{id}', [BlogController::class, 'detail'])->middleware('update.blog.view.count');
    Route::get('/comment/{id}', [CommentController::class, 'comment']);
    Route::post('/addcomment/{id}', [CommentController::class, 'addcomment']);
    Route::post('/like/{id}', [BlogController::class, 'like'])->name('blog.like');
});
Route::get('/profile', [BlogController::class, 'profil']);
Route::get('/logout', [LoginController::class, 'logout']);
