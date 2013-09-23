<?php
class basicComposer {
	
	public function compose($view)
	{
		//main categories
		$mainCategories = Category::whereNull('parent')->get();
		$view->with('mainCategories', $mainCategories);
	}
}