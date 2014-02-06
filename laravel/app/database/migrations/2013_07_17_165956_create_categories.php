<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->integer('parent')->nullable();
			$table->timestamps();
		});

		Schema::table('posts', function($table)
		{
			$table->integer('category_id');
			$table->integer('subcategory_id');
		});

		Schema::table('links', function($table)
		{
			$table->integer('category_id');
			$table->integer('subcategory_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');

		Schema::table('posts', function($table)
		{
			$table->dropColumn('category_id', 'subcategory_id');
		});

		Schema::table('links', function($table)
		{
			$table->dropColumn('category_id', 'subcategory_id');
		});
	}

}