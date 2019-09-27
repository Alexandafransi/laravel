<?php

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

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;

Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();
    // Route::get('/', function () {
    //     return view('welcome');
    // });
    
    Route::get('/','PostsController@index');
});

// Auth::routes();

Route::get('/user/verify/{token}','Auth\RegisterController@verifyUser');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome','PostsController@index');
Route::get('/create','PostsController@create');
Route::get('/post/{id}', 'PostsController@show')->name('posts.show');
Route::resource('comments', 'CommentsController');
Route::get('/comment','CommentsController@index');
Route::get('/contact','ContactController@contact');
Route::post('/','ContactController@send');
// Route::get('/comment','CommentsController@show');



// Route::get('/posts',"PostsController@index");

Route::resource('posts','PostsController');

