<?php

class FeedController extends \BaseController {

	public function categoryFeed($categorySlug)
	{
		$category = Category::with('subCategories')->where('slug', '=', $categorySlug)->first();
		$catArray = array();

		foreach($category->subCategories as $cat) {
			$catArray[] = $cat->id;
		}

		$links = Link::whereIn('category_id', $catArray)->paginate(10);
		$posts = Post::whereIn('category_id', $catArray)->get();

		return View::make('feeds.list')->with(array(
			'links' => $links,
			'posts' => $posts,
			'category' => $category
		));
	}

	public function subcategoryFeed($categorySlug, $subcategorySLug)
	{

	}
}