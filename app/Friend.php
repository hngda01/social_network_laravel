<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Friend extends Model
{
    protected $table="friend_list";
    public function diaries(){
    	return $this->hasMany('App\Diary','id_user','friend_id');
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
}
