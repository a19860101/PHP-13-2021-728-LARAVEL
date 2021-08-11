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
Route::get('/create','PostController@create')->name('post.create')->middleware('auth');
Route::post('/post','PostController@store')->name('post.store')->middleware('auth');
Route::get('/post/{post}','PostController@show')->name('post.show');

Route::get('/post/edit/{post}','PostController@edit')->name('post.edit')->middleware('auth');
Route::put('/post/{post}','PostController@update')->name('post.update')->middleware('auth');
// Route::patch();
Route::delete('/post/{post}','PostController@destroy')->name('post.delete')->middleware('auth');

Route::resource('/category','CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
