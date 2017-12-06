<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable = ['timelinePost', 'user_id','parent_id'];
    public function user() {
    	return $this->belongsTo('App\User','user_id');
    }
    public function comment() {
    	return $this->hasMany('App\Comment');
    }

    public function scopeNotReply($query){
    	return $query->whereNull('parent_id');
    }

    public function replies(){
    	return $this->hasMany('App\Post','parent_id');
    }

    public function likes(){
    	return $this->morphMany('App\Likeable','likeable');
    }
}
