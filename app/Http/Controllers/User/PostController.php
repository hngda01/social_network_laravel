<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\Diary;
use App\Comment;
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
		$user_id=Auth::user()->id;
		$str="".$request['category'];
		$id_category=0;
		if(strlen($str)!=0){
			$category= new Category();
			$category->name= $request['category'];
			$category->id_user=$user_id;
			$category->save();
			$id_category=$category->id;
		}
		else {
			$id_category= $request['category_select'];
		}
		
		$diary= new Diary();
		$diary->id_user= $user_id;
		$diary->title= $request['title'];
		$diary->id_category= $id_category;
		$diary->content= $request['content'];
		$diary->id_privacy=1;
		$diary->image= "a";
		$diary->save();		
		$image_name="id".$diary->id."user".$user_id;
		$diary->image=$image_name;
		$diary->save();
		if($request->hasFile('image')){
			$request->file('image')->move(
				"images",
				"".$image_name.".png"
				);
		}
		else echo "chua co file";


	}
	public function listPost(){
		$user= User::where('id',Auth::user()->id)->first();
		//echo $user->diary;
		return view('User.listPost',['diary'=>$user->diary]);
	}
	public function viewPost($id){
		$diary= Diary::where("id",$id)
		->where("id_user",Auth::user()->id)->first();
		
		//echo $diary;
		return view('User.viewPost',[
			"diary"=>$diary,
			"comment"=>$diary->comment
			]);
	}
	public function writeComment(Request $request){
		$comment= new Comment();
		$comment->id_diary= $request['diary_id'];
		$comment->id_user= Auth::user()->id;
		$comment->content=$request['comment'];
		$comment->save();
		echo "comment thanh cong";
	}
	public function deletePost($id){
		$diary= Diary::find($id);
		$diary->delete();
		return "delete successful";
	}
	public function editPost($id){
		$diary= Diary::find($id);
		return view('User.editPost',[
			'diary'=>$diary,
			'category'=>Category::all()
			]);
	}
	public function updatePost(Request $request){
		$user_id=Auth::user()->id;
		$diary= Diary::find($request['id_post']);
		$diary->id_user= $user_id;
		$diary->title= $request['title'];
		$diary->content= $request['content'];
		$diary->id_privacy=1;
		$image_name="id".$diary->id."user".$user_id;
		if($request->hasFile('image')){
			$request->file('image')->move(
				"images",
				"".$image_name.".png"
				);
		}
		else echo "chua co file";
		$diary->save();	
	}
}
