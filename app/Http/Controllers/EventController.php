<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;

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
		$event->priority=$request['priority'];
		$event->image= "a";
		$event->save();		
		$image_name="id".$event->id."user".$user_id;
		$event->image=$image_name;
		$event->save();
		if($request->hasFile('image')){
			$request->file('image')->move(
				"images",
				"".$image_name."_event.png"
				);
		}
		else echo "chua co file";
    }
    public function editEvent($id){
    	$event= Event::find($id);
    	return view("User.editEvent",["event"=>$event,
    								  "eventId"=>$id
    								  ]);
    }
    public function postEventEdit(Request $request){
    	$user_id=Auth::user()->id;
		
		
		$event= Event::find($request->event_id);
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
		if($request->hasFile('image')){
			$request->file('image')->move(
				"images",
				"".$image_name."_event.png"
				);
		}
		else echo "chua co file";
    }
}
