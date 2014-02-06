<?php

class LinkTableSeeder extends Seeder {

	public function run()
	{
		DB::table('links')->delete();
		
		for($i = 0; $i < 5; $i++) 
		{
			$link = new Link;

			$link->fill(array(
				'title' => 'Sample Link Title '.$i,
				'description' => 'This is a sample description '.$i,
				'url' => 'http://studfff'.$i.'.com',
				'slug' => 'sample-link-title-'.$i,
				'user_id' => 1,
				'category_id' => 1,
				'subcategory_id' => 2
				));

			$link->save();
		}
	}

}