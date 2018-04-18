<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resident extends Model
{
	        protected $table = "resident";
    public function user(){
		return $this->belongsTo('App\User');
	}
}
