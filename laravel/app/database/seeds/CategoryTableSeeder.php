<?php

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('categories')->delete();

		$categories['Photography'] = array('Basics', 'Film', 'Advanced');
		$categories['PHP'] = array('Basics', 'Framework', 'Advanced', 'CMS');
		$categories['Javascript'] = array('Basics', 'Framework', 'Advanced', 'MV*');
		$categories['HTML/CSS'] = array('Basics', 'Framework', 'Advanced', 'HTML5', 'CSS3', 'Animation');
		
		$baseCat = new Category;
		$baseCat->name = 'Basic Category';
		$baseCat->slug = 'basic-category';
		$baseCat->save();

		$baseSubCat = new Category;
		$baseSubCat->name = 'Basic SubCategory';
		$baseSubCat->slug = 'basic-subcategory';
		$baseSubCat->parent = 1;
		$baseSubCat->save();

		foreach ($categories as $cat => $subcats) {
			$category = new Category;
			$category->name = $cat;
			$category->slug = Str::slug($cat);
			$category->save();

			foreach ($subcats as $s) {
				$subCategory = new Category;
				$subCategory->name = $s;
				$subCategory->slug = Str::slug($s);
				$subCategory->parent = $category->id;
				$subCategory->save();
			}
		}
	}
}
