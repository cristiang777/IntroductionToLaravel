<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = array('username','email','password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($value){
		$this->attributes['password'] = Hash::make($value);
	}

	public function book(){
		return $this->hasMany('Book');
	}

	public static function validate($input){

		$rules = array(
			'username'=>'required|min:3|max:50|alphanum|unique:users',
			'email'=>'required|email|unique:users',
			'password'=>'required|between:4,10|confirmed|alphanum',
			'password_confirmation'=>'required|between:4,10'
		);

		return Validator::make($input,$rules);
	}
}
