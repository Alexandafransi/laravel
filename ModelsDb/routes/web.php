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

Route::get('/', function () {
    return view('welcome');
});



Route::resource('posts','PostsController');
Route::get('/posts',"PostsController@index");


// Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::group(['middleware' => 'disablepreventback'],function(){
	Auth::routes();
	Route::get('/posts', 'PostsController@index');
});
