<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= "category";
    public function user(){
    	return belongsTo('App\User','id_user','id');
    }

}
