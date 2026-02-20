<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.categories');
})->name('admin.index');

Route::get('/create_category', [CategoriesController::class, 'create']);
Route::get('/del_category/{id}', [CategoriesController::class, 'del_category']);


Route::get('/admin/posts', function () {
    return view('admin.posts');
})->name('admin.posts');

Route::post('/create_post', [PostsController::class, 'create']);
Route::get('/del_post/{id}', [PostsController::class, 'del_post']);


// USERS => 
Route::get('/admin/users', function () {
    return view('admin.users');
})->name('admin.users');

Route::post('/create_user', [UsersController::class, 'create']);
Route::get('/del_user/{id}', [UsersController::class, 'del_user']);



Route::get('/login', function(){
    return view('admin.login') ;
})->name('login') ;

Route::post('/login', [UsersController::class, 'login']) ;