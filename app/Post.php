<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function admins(){
		return $this->belongsTo('App\Admin','admin_id');
	}
}
