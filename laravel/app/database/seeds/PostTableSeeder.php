<?php

class PostTableSeeder extends Seeder {

	public function run()
	{
		DB::table('posts')->delete();
		
		for($i = 0; $i < 5; $i++) 
		{
			$link = new Post;

			$link->fill(array(
				'title' => 'Sample Post Title'.$i,
				'description' => 'This is a sample description '.$i,
				'slug' => 'sample-post-title-'.$i,
				'content' => 'Sample content will go here and will take up a certain amount of space. Let\'s discuss it!', 
				'user_id' => 1,
				'category_id' => 1
				));

			$link->save();
		}
	}

}