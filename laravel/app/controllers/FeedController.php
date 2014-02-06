<?php

class FeedController extends \BaseController {

    public function categoryFeed($categorySlug)
    {
        $category = Category::with('subCategories')->where('slug', '=', $categorySlug)->first();
        $catArray[] = 0;

        foreach($category->subCategories as $cat) {
            $catArray[] = $cat->id;
        }

        $links = Link::where('category_id', '=', $category->id)
                ->orWhereIn('subcategory_id', $catArray)
                ->get();

        $posts = Post::where('category_id', '=', $category->id)
                ->orWhereIn('subcategory_id', $catArray)
                ->get();

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
