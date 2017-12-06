<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserInfo;
use App\Notification;
use App\Category;
use App\Diary;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function viewInfo($user_id){
        $notifications= Notification::where('id_user',Auth::user()->id)
        ->where("seen",0)
        ->get();
        $diaries= Diary::where("id_user",$user_id)->get();
    	$user= User::find($user_id);
        $friend= $user->friendList;
        $category= $user->category;
    	return view('User.information_profile',["user"=>$user,
                                                'notifications'=>$notifications,
                                                'category'=>$category,
                                                'friends'=>$friend,
                                                'diaries'=>$diaries
                                                    ]);
    }
    public function editInfo($user_id){
        $notifications= Notification::where('id_user',Auth::user()->id)
        ->where("seen",0)
        ->get();
    	$user= User::find($user_id);
        return view('User.contact_details_page',["user"=>$user,
                                                'notifications'=>$notifications
                                                    ]);	
    }
    public function updateInfo($user_id,Request $request){
    	$user= User::find($user_id);
    	$user->name = $request["name"];
        $user->save();
        $info= UserInfo::find($user_id);
        $info->address= $request["address"];
        $info->hobby= $request["hobby"];
        $info->school= $request["school"];
        $info->save();
        return redirect('home');
    }
    public function updateAvatar(Request $request){
        $info= UserInfo::find(Auth::user()->id);
        
        $image_name="avatar".Auth::user()->id;
        
        if($request->hasFile('image')){
            $request->file('image')->move(
                "images",
                "".$image_name.".png"
                );
            $info->avatar=$image_name;
            $info->save();
        }
        else echo "chua co file";
        
        return redirect('home');
    }
}
