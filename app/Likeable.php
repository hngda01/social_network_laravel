<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likeable extends Model
{
    protected $table = 'likeable';

    public function likeable(){
    	return $this->morphTo();
    }

    public function users(){
    	return $this->belongsTo('App\User','user_id');
    }
}
