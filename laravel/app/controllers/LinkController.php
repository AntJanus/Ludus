<?php

class LinkController extends \BaseController {

	public function linkList()
	{
		$links = Link::all();

		return View::make('links.list')->with(array('links' => $links));
	}

	public function linkById($id)
	{
		$links = Link::find($id);
		return View::make('links.single')->with(array('link' => $link));
	}

	public function linkCanon($category, $subcategory, $slug)
	{
		$links = Link::where('slug', '=', $slug)->get();

		return View::make('links.single')->with(array(
				'category' => $category, 
				'subcategory' => $subcategory,
				'link' => $link));
	}

	public function linkAdd()
	{
		$categories = Category::with('subCategories')->whereNull('parent')->get();
		$menu = array();
		$submenu = array();
		
		foreach($categories as $cat){
			$menu[$cat->id] = $cat->name;
			foreach($cat->subCategories as $c){
				$submenu[$c->id] = $c->name;
			}
		}

		return View::make('links.add')->with(array('menu' => $menu, 'submenu' => $submenu));
	}

	public function linkAddPost()
	{
		/*
		 * TODO
		 *
		 *  * implement slugify
		 *  * check for duplicates 
		 *  * if name matches but not URL, augment name with a number (1/2/3 whatever)
		 *  * return to URL page
		 */
		$input = Input::all();

		$link = new Link;

		$link->fill(array(
			'title' => Input::get('title'),
			'url' => Input::get('url'),
			'category_id' => Input::get('category'),
			'subcategory_id' => Input::get('subcategory')
		));
		$link->save();
	}

}