<?php

class PostController extends \BaseController {

    public function postList()
    {
        $posts = post::all();

        return View::make('posts.list')->with(array('posts' => $posts));
    }

    public function postById($id)
    {
        $post = post::find($id);
        return View::make('posts.single')->with(array('post' => $post));
    }

    public function postCanon($category, $subcategory, $slug)
    {
        $post = post::where('slug', '=', $slug)->first();

        return View::make('posts.single')->with(array(
                'category' => $category,
                'subcategory' => $subcategory,
                'post' => $post));
    }


}
