<?php
class basicComposer {
	
	public function compose($view)
	{
		//main categories
		$mainCategories = Category::whereNull('parent')->remember(600)->get();
		$view->with('mainCategories', $mainCategories);
	}
}