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
        return $this->hasMany('App\Comment');
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
    public function friendRequests() {
        return $this->friendofMine()->wherePivot('accepted',false)->get();
    }
    public function friendRequestsPending() {
        return $this->friendOf()->wherePivot('accepted',false)->get();
    }
    public function hasFriendRequestsPending(User $user){
        return (bool)$this->friendRequestsPending()->where('id',$user->id)->count();
    }
    public function hasFriendRequestsReceived(User $user){
        return $this->friendRequests()->where('id',$user->id)->count();
    }
    public function addFriend (User $user){
        $this->friendOf()->attach($user->id);
    }

    public function acceptFriendRequest(User $user){
        $this->friendRequests()->where('id',$user->id)->first()->pivot->update([
            'accepted' => true,
        ]);
    }
    public function isFriendWith(User $user){
        return (bool) $this->friends()->where('id',$user->id)->count();
    }

}
