<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Comment;
class CommentController extends Controller
{
    public function createCommennt(Request $request) {
    	$v = Validator::make($request->all(),[
	    		'write_comment' => 'required|max:100',
	    	],
	    	[
	    		'write_comment.required' => 'Ban chua nhap Comment',
	    		'write_comment.max' => 'Comment qua dai',
	    	]);

    	if($v->fails())
    		return redirect()->back()->withErrors($v->errors());
    	$comment = new Comment();
    	$comment->content = $request['write_comment'];
    	$comment->id_user = 2;
    	//$comment->id_diary=1;
    	$comment->save();
    	return redirect()->route('home');
    }
}
