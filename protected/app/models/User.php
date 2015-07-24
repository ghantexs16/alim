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

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static $rules=[
		'username'=>'required|unique:users,username',
		'password'=>'required',
		'nama'=>'required',
		'level'=>'required'
	];

	public static $pesan=[
		'username.required'=>'Username harus diisi',
		'username.unique'=>'Username sudah digunakan',
		'nama.required'=>'Nama harus diisi',
		'password.required'=>'Nama Belakang harus diisi',
		'level.required'=>'Level user harus diisi'
	];

	public function operator(){
		return $this->hasOne('Operator','user_id');
	}


}
