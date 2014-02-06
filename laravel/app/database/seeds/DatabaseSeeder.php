<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');
		$this->call('LinkTableSeeder');
		$this->command->info('Link table seeded!');
		$this->call('PostTableSeeder');
		$this->command->info('Post table seeded!');
		$this->call('CategoryTableSeeder');
		$this->command->info('Category table seeded!');
	}

}