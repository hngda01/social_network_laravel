<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function viewInfo($user_id){
    	$user= User::find($user_id);
    	return view('User.information_profile',compact('user'));
    }
    public function editInfo($user_id){
    	$user= User::find($user_id);
        return view('User.contact_details_page',compact('user'));	
    }
    public function updateInfo($user_id,Request $request){
    	$user= User::find($user_id);
    	$user ->name = $request["edit_name"];
    	$user->phonenumber= $request['edit_mobile'];
    	$user->address= $request["edit_address"];
    	$user->update();
        return redirect('home');
    }
}
