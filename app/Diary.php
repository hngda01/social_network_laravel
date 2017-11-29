<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $table="diary";
    public function category(){
    	return $this->hasOne('App\Category',"id","id_category");
    }
    public function privacy(){
    	return $this->hasOne('App\Privacy');
    }
    public function comment(){
    	return $this->hasMany('App\Comment','id_diary','id');
    }
    public function userName($fid)
    {

        return User::find($fid)->name;
    }
    public function specificFriends(){
        return $this->hasMany("App\SpecificFriend","diary_id","id");
    }
    public function checkPrivacy($userId,$diary){
        if($userId== Auth::user()->id) return 1;
        switch($diary->id_privacy){
            case 0: {
                return 0;
                break;
            }
            case 1:
            case 3: {
                return 1;
                break;
            }
            case 2:{
                if(count($diary->specificFriends->where("user_id",$userId))!=0)
                    return 1;
                else return 0;
                break;
            }

        }
    }

}
