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

    public function linkCanon($category, $subcategory, $slug)
    {
        $link = Link::where('slug', '=', $slug)->first();
        $cat = Category::where('id', '=', $link->category_id)->first();
        $subcat = Category::where('id', '=', $link->subcategory_id)->first();

        if($cat->slug != $category || $subcat->slug != $subcategory){
            return Redirect::to('links/'.$category->slug.'/'.$subcategory->slug.'/'.$link->slug);
        }
        else{
            return View::make('links.single')->with(array(
                'category' => $cat,
                'subcategory' => $subcat,
                'link' => $link));
        }
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

        //check for duplicate
        $linkCheck = Link::where('url', '=', $input['url'])->first();
        if (empty($linkCheck)) {

            $link   = new Link;
            $tempSlug = Str::slug($input['title']);
            $slugCheck = Link::whereRaw("slug REGEXP '^{$tempSlug}(-[0-9]*)?$'")->count();
            $slug = $slugCheck > 0 ? $tempSlug.'-'.$slugCheck : $tempSlug;

            //create url
            $subcat = Category::find($input['category']);
            $cat    = Category::find($subcat->parent);

            $link->fill(array(
                'title' => Input::get('title'),
                'url' => Input::get('url'),
                'category_id' => $subcat->parent,
                'subcategory_id' => $subcat->id,
                'slug' => $slug
                ));

            $link->save();

            $url = 'links/'.$cat->slug.'/'.$subcat->slug.'/'.$link->slug;
            echo $url; exit;
            return Redirect::to($url);
        }
        else{
            //create url
            $subcat = Category::find($linkCheck->subcategory_id);
            $cat    = Category::find($subcat->parent);
            $url    = 'links/'.$cat->slug.'/'.$subcat->slug.'/'.$linkCheck->slug;
            return Redirect::to($url);
        }
    }

}
