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
    
}
