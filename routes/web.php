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
Route::get('login',function(){
	return view("login");
});
Route::post('login',"loginController@checkLogin");
Route::get('register',function(){
	return view("register");
});
Route::post('register','loginController@register');
Route::get('logout','loginController@logout');
Route::group(['middleware'=>'user'],function(){
	Route::get('home','User\PostController@home');
	Route::get('newPost','User\PostController@showNewPost');
	Route::post('createPost','User\PostController@createPost');
	Route::get('listPost','User\PostController@listPost');
	Route::get('viewPost/{id}','User\PostController@viewPost');
	Route::post('writeComment','User\PostController@writeComment');
	Route::get('deletePost/{id}','User\PostController@deletePost');
	Route::get('editPost/{id}','User\PostController@editPost');
	Route::post('editPost','User\PostController@updatePost');
	Route::get('viewInfo','User\InfoController@viewInfo');
	Route::get('editInfo','User\InfoController@editInfo');
	Route::post('editInfo','User\InfoController@updateInfo');
	Route::get('friendList','User\FriendController@friendList');
	Route::get('searchPage','User\FriendController@showSearchPage');
	Route::post('searchFriend','User\FriendController@searchFriend');
	Route::get('addFriend','User\FriendController@addFriend');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
