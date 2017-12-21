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
    public function userAvatar($fid)
    {
        $user= User::find($fid);
        $info=$user->info;
        return $info[0]->avatar;
    }
    public function categoryName($id)
    {
        return Category::find($id)->name;
    }
    public function specificFriends(){
        return $this->hasMany("App\SpecificFriend","diary_id","id");
    }
    public function checkPrivacy($userId,$diary){
        if($userId== $diary->id_user) return 1;
        switch($diary->id_privacy){
            case 0: {
                return 0;
                break;
            }
            case 1:{
                $rela= Friend::where("user_id",$userId)
                            ->where("friend_id",$diary->id_user)
                            ->where("accepted",1)->get();
                if(count($rela)==0) return 0;
                else return 1;
                break;
            }
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
    public function checkFriend($userId,$diary){
        if($userId== $diary->id_user) return 1;
        $rela= Friend::where("user_id",$userId)
                            ->where("friend_id",$diary->id_user)
                            ->where("accepted",1)->get();
                if(count($rela)==0) return 0;
                else return 1;
    }

}
