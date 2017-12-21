<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use App\Friend;
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
        $friendRequests= Friend::where("friend_id",Auth::user()->id)
                            ->where("accepted",0)
                            ->get();
        $diaries= Diary::where("id_user",$user_id)->get();
    	$user= User::find($user_id);
        $friend= $user->friendList;
        $category= $user->category;
    	return view('User.information_profile',["user"=>$user,
                                                'friendRequests'=>$friendRequests,
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
        $friendRequests= Friend::where("friend_id",Auth::user()->id)
                            ->where("accepted",0)
                            ->get();
    	$user= User::find($user_id);
        return view('User.contact_details_page',["user"=>$user,
                                                'friendRequests'=>$friendRequests,
                                                'notifications'=>$notifications
                                                    ]);	
    }
    public function addFriend($friend_id){
        $relation= new Friend();
        $relation->user_id= Auth::user()->id;
        $relation->friend_id= $friend_id;
        $relation->accepted= 0;
        $relation->save();
        return redirect()->back();
    }
    public function acceptFriendRequest($friend_id){
        $relation= Friend::where("user_id",$friend_id)
                        ->where("friend_id",Auth::user()->id)->first();
        $relation->accepted=1;
        $relation->save();
        
        $newRelation= new Friend();
        $newRelation->user_id= Auth::user()->id;
        $newRelation->friend_id= $friend_id;
        $newRelation->accepted= 1;
        $newRelation->save();
        return redirect()->back();
    }
    public function declineFriendRequest($friend_id){
        $relation= Friend::where("user_id",$friend_id)
                        ->where("friend_id",Auth::user()->id)->first();
        $relation->delete();
        return redirect()->back();
    }
    public function unfriend($friend_id){
        $relation= Friend::where("user_id",$friend_id)
                        ->where("friend_id",Auth::user()->id)->first();
        $relation->delete();
        $relation= Friend::where("user_id",Auth::user()->id)
                        ->where("friend_id",$friend_id)->first();
        $relation->delete();
        return redirect()->back();
    }
    public function updateInfo($user_id,Request $request){
        $v = Validator::make($request->all(),[
            'name' => 'required|max:50',
            'address' => 'required|max:50',
            'hobby' => 'required|max:50',
            'school' => 'required'
        ]);
        if($v->fails())
            return redirect()->back()->withErrors($v->errors());
    	$user= User::find($user_id);
    	$user->name = $request["name"];
        $user->save();
        $info= UserInfo::where("id_user",$user_id)->first();
        $info->address= $request["address"];
        $info->hobby= $request["hobby"];
        $info->school= $request["school"];
        $info->save();
        return redirect()->back();
    }
    public function updateAvatar(Request $request){
        $info= UserInfo::where("id_user",Auth::user()->id)->first();
        
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
        
        return redirect()->back();
    }
}
