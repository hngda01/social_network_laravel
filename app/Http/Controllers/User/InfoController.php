<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function viewInfo(){
    	$user= User::find(Auth::user()->id);
    	return view('User.user_personal_information_profile',[
    		'info'=>$user->userInfo
    		]);
    }
    public function editInfo(){
    	$user= User::find(Auth::user()->id);
    	return view('User.contact_details_page',[
    		'info'=>$user->userInfo
    		]);	
    }
    public function updateInfo(Request $request){
    	$user= User::where("id",Auth::user()->id)->first();
    	$userInfo= $user->userInfo[0];
    	//echo $userInfo;
    	$userInfo->date_of_birth= $request["birth_day"];
    	$userInfo->school= $request['school'];
    	$userInfo->address= $request["address"];
    	$userInfo->hobby= $request["hobby"];
    	$userInfo->save();
    }
}
