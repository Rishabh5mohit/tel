<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    //
	public function user(){
		return $this->belongsTo('App\User');
	}
}
