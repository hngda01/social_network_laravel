<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table="notification";
     public function diary() {
    	return $this->belongsTo('App\Diary','id_diary');
    }
}
