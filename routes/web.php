<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $blogs = DB::table('blogs')->get();
    return view('home',['blogs' => $blogs]);
});

Route::get('user/dashboard', function(){
    return view('user.dashboard');
});

// Route::get('/user/dashboard', UserController::class, 'dashboard');
Route::get('/admin/dashboard',[BlogController::class, 'show']);

// user routes here
Route::get('/registerPage', [UserController::class, 'registerPage']);
Route::post('/registerUser', [UserController::class, 'registerUser']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/loginPage', [UserController::class, 'loginPage']);
Route::post('/loginUser', [UserController::class, 'loginUser']);


//post routes here
Route::post('/create-post', [BlogController::class, 'createPost']);
Route::get('/view-blog/{blog}', [BlogController::class, 'viewBlog']);
Route::put('/view-blog/{blog}', [BlogController::class, 'updateBlog']);
Route::delete('/delete-blog/{blog}', [BlogController::class, 'deleteBlog']);
Route::get('/user/myblogs', [BlogController::class, 'myBlogs']);
Route::get('/edit-blog/{data}', [BlogController::class, 'editBlog']);
Route::get('/delete-userblog/{data}', [BlogController::class, 'deleteUserBlog']);
Route::get('/view-userBlog/{data}', [BlogController::class, 'viewUserBlog']);
Route::post('/update_blog_data/{id}', [BlogController::class, 'update_blog_data']);


Route::get('/read-blog/{id}', [BlogController::class, 'readBlog']);

