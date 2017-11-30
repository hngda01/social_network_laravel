<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Notification;
use App\User;

class EventController extends Controller
{
    public function newEvent(){
    	return view("User.newEvent");
    }
    public function createEvent(Request $request){
    	$user_id=Auth::user()->id;
		
		
		$event= new Event();
		$event->id_user= $user_id;
		$event->title= $request['title'];
		$event->content= $request['content'];
		$event->address= $request['address'];
		$event->start_date= $request['start_date'];
		$event->end_date= $request['end_date'];
		$event->time=$request['time'];
		$event->end_time=$request['end_time'];
		$event->priority=$request['priority'];
		$event->image= "a";
		$event->save();		
		$image_name="id".$event->id."user".$user_id."_event";
		if($request->hasFile('image')){
			$request->file('image')->move(
				"images",
				"".$image_name.".png"
				);
			$event->image=$image_name;
			$event->save();
		}
		else echo "chua co file";
    }
    public function editEvent($id){
    	$event= Event::find($id);
    	return view("Event._edit_event",["event"=>$event,
    								  "eventId"=>$id
    								  ]);
    }
    public function deleteEvent($id){
		$diary= Event::find($id);
		$diary->delete();
		return "delete successful";
	}
    public function showEvent($id){
    	$event= Event::find($id);
    	return view("Event._show_event",["event"=>$event
    								  ]);
    }
    public function postEventEdit(Request $request){
    	$user_id=Auth::user()->id;
		
		
		$event= Event::find($request['event_id']);
		$event->id_user= $user_id;
		$event->title= $request['title'];
		$event->content= $request['content'];
		$event->address= $request['address'];
		$event->start_date= $request['start_date'];
		$event->end_date= $request['end_date'];
		$event->priority=$request['priority'];
		$event->image= "a";
		$event->save();		
		$image_name="id".$event->id."user".$user_id;
		$event->image=$image_name;
		$event->save();
		
    }
    public function listEvent(){
    	$notifications= Notification::where('id_user',Auth::user()->id)
										->where("seen",0)
										->get();
		$user= User::find(Auth::user()->id);
		$friend= $user->friendList;
		$category= $user->category;
		return view('User.listEvent',['notifications'=>$notifications,
							'friends'=>$friend,
							'category'=>$category,
							'user'=>$user
							]);
    }
}
