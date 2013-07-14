<?php

class Link extends Eloquent{

	protected $table = 'links';

	protected $guarded = array('id');

	public function user()
	{
		return $this->belongsTo('User');
	}
	
}