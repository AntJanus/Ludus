<?php

class Category extends Eloquent{

	protected $table = 'categories';

	protected $guarded = array('id');

	public function subCategories()
	{
		return $this->hasMany('Category', 'parent');
	}
	
}