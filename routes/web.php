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

/*
Route::get('/hello', function () {
    return '<h1>Hello Usman Haider</h1>';
});
Route::get('/users/{id}/{name}',function($id,$name){
    //return view('pages.about');
    return "This is user ".$name." with an id => ".$id;
});
Route::get('/about',function(){
    return view('pages.about');
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts','PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
