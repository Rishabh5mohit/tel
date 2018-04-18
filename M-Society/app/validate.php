<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class validate extends Model
{
        protected $table = "validate";
    //
	public function user(){
		return $this->belongsTo('App\User');
	}
}
