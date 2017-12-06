<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Friend;
use App\UserInfo;
use App\Notification;
use Illuminate\Support\Facades\Auth;
/**
* 
*/
class SearchController extends Controller
{
	public function getResults(Request $request) {
		$notifications= Notification::where('id_user',Auth::user()->id)
        ->where("seen",0)
        ->get();
        $friendRequests= Friend::where("friend_id",Auth::user()->id)
                            ->where("accepted",0)
                            ->get();
    	$user= User::find(Auth::user()->id);
		$query = $request['query'];

		if(!$query){
			return redirect()->route('home');
		}

		$users = User::where('name','LIKE',"%{$query}%")->orWhere('email','LIKE',"%{$query}%")->get();
		//dd($users);
		return view('search.results_page',compact('users'),["user"=>$user,
                                                'friendRequests'=>$friendRequests,
                                                'notifications'=>$notifications]);
	}
}