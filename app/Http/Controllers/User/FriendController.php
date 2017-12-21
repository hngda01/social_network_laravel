<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class FriendController extends Controller
{
    public function friendList(){

    	$user= User::find(Auth::user()->id);
    	return view("User.listFriend",[
    		"listFriend"=>$user->friendList
    		]);
    }
    public function showSearchPage(){
        
    	return view("User.searchPage");
    }
    public function searchFriend(Request $request){
    	$user= User::where("name",$request["text"])->first();
    	return view("User.searchPage",["listResult"=>$user]);
    }
    public function addFriend(){
    	
    }
}
