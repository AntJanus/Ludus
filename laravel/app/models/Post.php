<?php

class Post extends Eloquent{

	protected $table = 'posts';

	protected $guarded = array('id');

	public function user()
	{
		return $this->belongsTo('User');
	}
	
}