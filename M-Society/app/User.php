<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','isOwner','isShop','type','isWorker','isResident'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function isOwner(){
	if($this->isOwner)
		return true;
	else
		return false;
	
	}
	public function isShop(){
	if($this->isShop)
		return true;
	else
		return false;
	
	}
	public function isResident(){
	if($this->isResident)
		return true;
	else
		return false;
	
	}
	public function isWorker(){
	if($this->isWorker)
		return true;
	else
		return false;
	
	}
	public function complaints(){
		return $this->hasMany('App\complaint');
	}
	public function validate(){
		return $this->hasMany('App\validate');
	}
	public function worker(){
		return $this->hasMany('App\worker');
	}
	public function resident(){
		return $this->hasMany('App\resident');
	}
}
