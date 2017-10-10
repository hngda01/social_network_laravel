<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
	public function home(){
		return view('home');
	}
	public function showNewPost(){
		$user= User::where('id',Auth::user()->id)->first();
    	//echo $user;
		$category= $user->category;
    	//echo $category;
		return view('User.newPost',['category'=>$category]);
	}
	public function createPost(Request $request){
		//return "hello" .$request['category'];
		$category= new Category();
		$category->name= $request['category'];
		$category->id_user=Auth::user()->id;
		$category->save();
		return view('home');

	}
}
