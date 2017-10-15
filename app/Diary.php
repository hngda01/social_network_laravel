<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $table="diary";
    public function category(){
    	return $this->hasOne('App\Category');
    }
    public function privacy(){
    	return $this->hasOne('App\Privacy');
    }
    public function comment(){
    	return $this->hasMany('App\Comment','id_diary','id');
    }
}
