<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FriendController extends Controller
{
    public function getIndex() {
    	$friends = Auth::user()->friends();
    	$requests = Auth::user()->friendRequests();
    	return view('friend.index',compact('friends','requests'));
    }


}
