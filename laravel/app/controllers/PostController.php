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

    public function postAdd()
    {
        $categories = Category::with('subCategories')->whereNull('parent')->get();
        $menu = array();

        foreach($categories as $cat){
            $menu[$cat->name] = array();
            foreach($cat->subCategories as $c){
                $menu[$cat->name][$c->id] = $c->name;
            }
        }

        return View::make('posts.add')->with(array('menu' => $menu));
    }

    public function postAddPost()
    {
        /*
         * TODO
         *
         * [ ] name validation/sanitization
         * [ ] create URL builder class/function
         */
        $input  = Input::all();

            $post   = new Post;
            $tempSlug = Str::slug($input['title']);
            $slugCheck = Post::whereRaw("slug REGEXP '^{$tempSlug}(-[0-9]*)?$'")->count();
            $slug = $slugCheck > 0 ? $tempSlug.'-'.$slugCheck : $tempSlug;

            //create url
            $subcat = Category::find($input['category']);
            $cat    = Category::find($subcat->parent);

            $post->fill(array(
                'title' => Input::get('title'),
                'content' => Input::get('content'),
                'description' => Input::get('description');
                'category_id' => $subcat->parent,
                'subcategory_id' => $subcat->id,
                'slug' => $slug,
                'user_id' => Auth::user()->id
                ));

            $post->save();

            $url = 'posts/'.$cat->slug.'/'.$subcat->slug.'/'.$post->slug;
            return Redirect::to($url);
    }
}
