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
    public function diary(){
        return $this->hasMany('App\diary','id_user','id');
    }
    public function userInfo(){
        return $this->hasMany('App\UserInfo','id_user','id');
    }
    public function friendList(){
        return $this->hasOne('App\Friend',"user_id","id");
    }
}
