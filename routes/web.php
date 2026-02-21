<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('blog.home');
});

Route::get('/post/{id}', function ($id) {
    return view('blog.single', compact('id'));
});

Route::middleware('authMiddleware')->group(function () {
    Route::get('/admin', function () {
        return view('admin.categories');
    })->name('admin.index');

    Route::get('/create_category', [CategoriesController::class, 'create']);
    Route::get('/del_category/{id}', [CategoriesController::class, 'del_category']);


    Route::get('/admin/posts', function () {
        return view('admin.posts');
    })->name('admin.posts');

    // USERS => 
    Route::get('/admin/users', function () {
        return view('admin.users');
    })->name('admin.users');

    Route::post('/create_user', [UsersController::class, 'create']);
    Route::get('/del_user/{id}', [UsersController::class, 'del_user']);


    Route::post('/create_post', [PostsController::class, 'create']);
    Route::get('/del_post/{id}', [PostsController::class, 'del_post']);


    Route::get('/logout', [UsersController::class, 'logout']);
});




Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::post('/login', [UsersController::class, 'login']);