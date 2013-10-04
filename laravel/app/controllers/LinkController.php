<?php

class LinkController extends \BaseController {

    public function linkList()
    {
        $links = Link::all();

        return View::make('links.list')->with(array('links' => $links));
    }

    public function linkById($id)
    {
        $link = Link::find($id);
        return View::make('links.single')->with(array('link' => $link));
    }

    public function linkCanon($slug)
    {
        $link = Link::where('slug', '=', $slug)->first();

        return View::make('links.single')->with(array(
            'category' => $category,
            'subcategory' => $subcategory,
            'link' => $link));
    }

    public function linkAdd()
    {
        $categories = Category::with('subCategories')->whereNull('parent')->get();
        $menu = array();

        foreach($categories as $cat){
            $menu[$cat->name] = array();
            foreach($cat->subCategories as $c){
                $menu[$cat->name][$c->id] = $c->name;
            }
        }

        return View::make('links.add')->with(array('menu' => $menu));
    }

    public function linkAddPost()
    {
        /*
         * TODO
         *
         *  * [x]implement slugify
         *  * [x]check for duplicates
         *  * [x]if name matches but not URL, augment name with a number (1/2/3 whatever)
         *  * []return to URL page
         */
        $input  = Input::all();
        $subcat = Category::find($input['category']);

        //check for duplicate
        $linkCheck = Link::where('url', '=', $input['url'])->get();
        if ($linkCheck == null) {

            $link   = new Link;
            $tempSlug = Str::slug($input['title']);
            $slugCheck = Link::whereRaw("slug REGEXP '^{$tempSlug}(-[0-9]*)?$'")->count();
            $slug = $slugCheck > 0 ? $tempSlug.'-'.$slugCheck : $tempSlug;

            $link->fill(array(
                'title' => Input::get('title'),
                'url' => Input::get('url'),
                'category_id' => $subcat->parent,
                'subcategory_id' => $subcat->id,
                'slug' => $slug
                ));
            $link->save();

            return Redirect::route('/links/'.$link->slug);
        }
        else{
            return Redirect::route('/links/'.$linkCheck->slug);
        }
    }

}
