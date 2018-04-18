<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    protected $table = "worker";
    //
	public function user(){
		return $this->belongsTo('App\User');
	}
}
