<?php

class Permission extends Eloquent{

	protected $table = 'permissions';

	protected $guarded = array('id');

	public function users()
	{
		return $this->belongsToMany('User');
	}
	
}