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
	return "dcm";
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
	Route::get('viewInfo/{user_id}',[
			'uses' => 'User\InfoController@viewInfo',
			'as' => 'view-info',
		    'middleware'=> 'auth'
	]);
	Route::get('editInfo/{user_id}',[
		'uses' => 'User\InfoController@editInfo',
		'as' => 'edit-info',
		'middleware'=> 'auth'
	]);
	Route::post('updateInfo/{user_id}',[
		'uses' => 'User\InfoController@updateInfo',
		'as' => 'update-info',
	]);
	Route::get('friendList','User\FriendController@friendList');
	Route::get('searchPage','User\FriendController@showSearchPage');
	Route::post('searchFriend','User\FriendController@searchFriend');
	Route::get('addFriend','User\FriendController@addFriend');
	Route::get('notifications','NotificationController@show');
	Route::get('test','User\PostController@test');
	Route::get('newEvent','EventController@newEvent');
	Route::get('editEvent/{id}','EventController@editEvent');
	Route::post('createEvent','EventController@createEvent');
	Route::post('editEventPost','EventController@postEventEdit');
	Route::get('delete-post/{post_id}',[
	'uses' => 'PostControler@getDeletePost',
	'as' => 'post.delete',
	'middleware' => 'auth',
]);
	Route::get('profile','HomeController@index');

Route::post('edit',[
	'uses' => 'PostControler@postEditPost',
	'as' => 'edit'
]);
});

Route::post('taonhatki',[
	'uses' => 'PostControler@createPost',
	'as' => 'test'
]);

Route::post('insertComment',[
	'uses' => 'CommentController@createCommennt',
	'as' => 'createcomment'
]);

Auth::routes();


