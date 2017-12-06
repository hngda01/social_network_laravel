<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;
use Validator;
use Auth;
class PostControler extends Controller
{
    public function createPost($user,Request $request) {
    	$v = Validator::make($request->all(),[
    		'timelinePost' => 'required|max:50',
    	],
    	[
    		'timelinePost.required' => 'Ban chua nhap Status',
    		'timelinePost.max' => 'status qua dai',
    	]);

    	if($v->fails())
    		return redirect()->back()->withErrors($v->errors());
    	$post = new Post();
    	$post->timelinePost = $request['timelinePost'];
    	$mess = 'error';
    	if($request->user()->post()->save($post))
    		$mess = 'Success';
    	return redirect()->back()->with(['mess' => $mess]);
    }

    public function getDeletePost($post_id) {
    	$post = Post::where('id',$post_id)->first();
    	if(Auth::user() != $post->user){
    		return redirect()->back();
    	}
        $post->delete();
    	return redirect()->back()->with(['mess' => 'Success']);
    }

    public function postEditPost(Request $request)
    {
        $this->validate($request, [
            'timelinePost' => 'required'
        ]);
        $post = Post::find($request['postId']);
        $post->timelinePost = $request['timelinePost'];
        $post->update();
        return response()->json(['new_timelinePost' => $post->timelinePost], 200);
    }

    public function postReply(Request $request,$statusId){
       $this->validate($request,[
            "write_comment" => 'required|max:1000',
       ],[
            'required'=> 'the reply body is required.'
       ]);

       $status = Post::notReply()->find($statusId);

       if(!$status)
        return redirect()->back();

       if(!Auth::user()->isFriendWith($status->user) && Auth::user()->id !== $status->user->id)
        return redirect()->back();

        $reply = Post::create([
            'timelinePost' => $request->input("write_comment"),
            'user_id' => Auth::user()->id,

        ])->user()->associate(Auth::user());

        $status->replies()->save($reply);
        return redirect()->back();
    }

    public function getLike($statusId){
        $status = Post::find($statusId);

        if(!$status){
            return redirect()->back();
        }

        if(Auth::user()->hasLikedPost($status)){
            return redirect()->back();
        }
        $like = $status->likes()->create([]);
        Auth::user()->likes()->save($like);
        return redirect()->back();
    }
}
