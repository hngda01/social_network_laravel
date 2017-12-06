<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $posts = Post::orderBy('created_at','desc')->get();
        $user = User::find($id);
        $comments = Comment::orderBy('created_at','ASC')->get();
        return view('home.Profile_with_timeline',[
            'user' => $user,
            'posts' => $posts,
            'comments' => $comments,
        ]);       
    }
}
