<?php

class User extends Eloquent{

	protected $table = 'users';

	protected $hidden = array('password');

	protected $fillable = array('email', 'username', 'name');
	
}