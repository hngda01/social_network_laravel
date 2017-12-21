<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Comment extends Model
{
    protected $table="comment";
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
    public function postcomment() {
    	return $this->belongsTo('App\Post');
    }
}
