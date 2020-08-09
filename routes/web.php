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

Route::get('/', 'PostController@index')->name('root');

Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/add-category', 'CategoryController@add')->name('new-category');
Route::post('/save-category', 'CategoryController@store')->name('save-category');

Route::get('/add-post', 'PostController@add')->name('new-post');
Route::post('/save-post', 'PostController@store')->name('save-post');
Route::get('/delete-post/{id}', 'PostController@delete')->name('delete-post');
Route::get('/post/{id}', 'PostController@show')->name('show-post');

Route::post('/add-comment', 'CommentController@store')->name('add-comment');
