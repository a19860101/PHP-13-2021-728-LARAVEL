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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/welcome', function(){
//     return 'Hello Weclome';
// });
// Route::get('/about',function(){
//     return view('about');
// });
Route::get('/','PostController@index')->name('post.index');
Route::get('/create','PostController@create')->name('post.create');
Route::post('/post','PostController@store')->name('post.store');
Route::get('/post/{post}','PostController@show')->name('post.show');

Route::get('/post/edit/{post}','PostController@edit')->name('post.edit');
Route::put('/post/{post}','PostController@update')->name('post.update');
// Route::patch();
Route::delete('/post/{post}','PostController@destroy')->name('post.delete');

Route::resource('/category','CategoryController');
