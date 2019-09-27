<?php

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function(){

    $user= factory(\App\User::class)->create();//creating user first


//     $phone = new \App\Phone();

//     $phone->phone='47643674364';

//    return  $user->phone()->save($phone);//assign user id first

    $user->phone()->create([
        //phone() calling for relationship
        //create() methode for create either your user or anything so it create to the database
        'phone' => '23232332',
    ]);
});