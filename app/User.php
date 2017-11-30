<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function category(){
        return $this->hasMany('App\Category','id_user','id');
    }
    public function events(){
        return $this->hasMany('App\Event','id_user','id');
    }
    public function diary(){
        return $this->hasMany('App\diary','id_user','id');
    }
    public function post() {
        return $this->hasMany('App\Post','user_id');
    }
    public function userInfo(){
        return $this->hasMany('App\UserInfo','id_user','id');
    }
    public function friendList(){
        return $this->hasMany('App\Friend',"user_id","id");
    }
    public function comment(){
        return $this->hasMany('App\Comment',"id_user","id");
    }
    public function notifications(){
        return $this->hasMany('App\Notification','id_user','id');
    }
    public function friendofMine() {
        return $this->belongsToMany('App\User','friend_list','user_id','friend_id');
    } 
    public function friendOf() {
        return $this->belongsToMany('App\User','friend_list','friend_id','user_id');
    } 
    public function friends() {
        return $this->friendofMine()->wherePivot('accepted',true)->get()->merge($this->friendOf()->wherePivot('accepted',true)->get());
    } 

}
