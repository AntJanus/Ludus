<?php

use Illuminate\Database\Migrations\Migration;

class CreateLinks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('links', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->string('url');
			$table->string('slug')->unique();
			$table->string('image_url')->nullable();
			$table->integer('votes')->nullable();
			$table->integer('clicks')->nullable();
			$table->integer('user_id');
			$table->integer('category_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('links');
	}

}