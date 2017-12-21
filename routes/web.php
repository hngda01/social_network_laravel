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
	Route::get('home','User\PostController@home')->name('home');
	Route::get('newPost','User\PostController@showNewPost');
	Route::get('addFriends/{friend_id}','User\InfoController@addFriend');
	Route::get('declineFriendRequest/{friend_id}','User\InfoController@declineFriendRequest');
	Route::get('unfriend/{friend_id}','User\InfoController@unfriend');
	Route::get('acceptFriendRequest/{friend_id}','User\InfoController@acceptFriendRequest');
	Route::post('createPost','User\PostController@createPost');
	Route::get('listPost','User\PostController@listPost');
	Route::get('listEvent','EventController@listEvent');
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
	Route::post('updateAvatar',[
		'uses' => 'User\InfoController@updateAvatar',
		'as' => 'update-avatar',
	]);
	Route::get('friendList','User\FriendController@friendList');
	Route::get('searchPage','User\FriendController@showSearchPage');
	Route::post('searchFriend','User\FriendController@searchFriend');
	Route::get('addFriend','User\FriendController@addFriend');
	Route::get('notifications','NotificationController@show');
	Route::get('test','User\PostController@test');
	Route::get('newEvent','EventController@newEvent');
	Route::get('editEvent/{id}','EventController@editEvent');
	Route::get('showEvent/{id}','EventController@showEvent');
	Route::get('deleteEvent/{id}','EventController@deleteEvent');
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
Route::get('/profile/{user_id}', 'User\InfoController@viewInfo');
});

Route::post('taonhatki/{user_id}',[
	'uses' => 'PostControler@createPost',
	'as' => 'post.taonhatki'
]);

Route::post('insertComment',[
	'uses' => 'CommentController@createCommennt',
	'as' => 'createcomment'
]);

Auth::routes();


Route::get('/profile/{user_id}', 'User\InfoController@viewInfo');

Route::get('delete-post/{post_id}',[
	'uses' => 'PostControler@getDeletePost',
	'as' => 'post.delete',
	'middleware' => 'auth',
]);

Route::post('edit',[
	'uses' => 'PostControler@postEditPost',
	'as' => 'edit'
]);

//Search

Route::get('search',[
	'uses' => 'SearchController@getResults',
	'as' => 'search.results',

]);

Route::get('friends',[
	'uses' => 'FriendController@getIndex',
	'as' => 'friends.page',
	'middleware'=>'auth',
]);

Route::get('friends/add/{username}',[
	'uses' => 'FriendController@getAdd',
	'as' => 'friends.add',
	'middleware'=>'auth',
]);

Route::get('friends/accept/{username}',[
	'uses' => 'FriendController@getAccept',
	'as' => 'friends.accept',
	'middleware'=>'auth',
]);
