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


}