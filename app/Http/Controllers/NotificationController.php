<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function show(){
    	$notifications= Notification::where('id_user',Auth::user()->id)
										->orderby('created_at')
										->get();
		return view("User.notification",["notifications"=>$notifications]);
    }
}
