<?php

class User extends Eloquent{

	protected $table = 'users';

	protected $hidden = array('password');

	protected $fillable = array('email', 'username', 'name');

	public function links()
	{
		return $this->hasMany('Link');
	}

	public function posts()
	{
		return $this->hasMany('Post');
	}

	public function permissions()
	{
		return $this->belongsToMany('Permission');
	}
}