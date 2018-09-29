<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Admin extends Model
{
    public function posts(){
    return $this->hasMany('App\Post');
	}

}
