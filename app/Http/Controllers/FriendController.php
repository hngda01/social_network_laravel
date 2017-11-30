<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class FriendController extends Controller
{
    public function getIndex() {
    	$friends = Auth::user()->friends();
    	$requests = Auth::user()->friendRequests();
    	return view('friend.index',compact('friends','requests'));
    }

    public function getAdd($username) {
    	$user= User::where('name',$username)->first();

    	if(!$user){
    		return redirect()->route('home',['user_id'=> $user->id])->with('mess','That user could not found');
    	}
    	if(Auth::user()->hasFriendRequestsPending($user) || $user->hasFriendRequestsPending( Auth::user()) ){
    		return redirect()->route('home',['user_id'=> $user->id])->with('mess','Friend request already pending');
    	}
		if(Auth::user()->isFriendWith($user)){
			return redirect()->route('home',['user_id'=> $user->id])->with('mess','You are friends');
		}

		Auth::user()->addFriend($user);

		return redirect()->route('home',['user_id'=> $user->id])->with('mess','Friend request sent');
    }
    public function getAccept($username){
    	$user= User::where('name',$username)->first();

    	if(!$user){
    		return redirect()->route('home',['user_id'=> $user->id])->with('mess','That user could not found');
    	}
    	if(!Auth::user()->hasFriendRequestsReceived($user))	{
    		return redirect()->route('home',['user_id'=> $user->id]);
    	}
    	Auth::user()->acceptFriendRequest($user);

    	return redirect()->route('home',['user_id'=> $user->id])->with('mess','Friend request accept');
    }
}
