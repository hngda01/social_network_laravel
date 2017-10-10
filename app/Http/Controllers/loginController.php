<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class loginController extends Controller
{
    public function checkLogin(Request $request){
    	$userMail= $request['user_name'];
    	$password= $request['password'];
    	if(Auth::attempt(['email'=>$userMail,'password'=>$password]))
    		return "Hello ".Auth::user()->name;
    	else return "sai mat khau";
    }
    public function register(Request $request){
    	$user= new User();
    	$user->email= $request['email'];;
    	$user->password=bcrypt($request['password']);
    	$user->name= $request['name'];
    	$user->save();
    }
    public function logout(){
    	Auth::logout();
    }
}
