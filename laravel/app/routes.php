<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

//links
Route::get('links', array(
	'as'   => 'linkList', 
	'uses' => 'LinkController@linkList'));

Route::get('links/{$id}', array(
	'as'   => 'linkById', 
	'uses' => 'LinkController@linkById'))
->where('id', '[0-9]+');

Route::get('links/{$category}/{$subcategory}/{$slug}', array(
	'as'   => 'linkCanon', 
	'uses' => 'LinkController@linkCanon'));

//feeds
Route::get('links/{$category}', array(
	'as'   => 'categoryFeed',
	'uses' => 'FeedController@categoryFeed'));

Route::get('links/{$category}/{$subcategory}', array(
	'as'   => 'subcategoryFeed',
	'uses' => 'FeedController@subcategoryFeed'));

//posts
Route::get('posts', array(
	'as'   => 'postList', 
	'uses' => 'PostController@postList'));

Route::get('posts/{$id}', array(
	'as'   => 'postById', 
	'uses' => 'PostController@postById'))
->where('id', '[0-9]+');

Route::get('posts/{$category}/{$subcategory}/{$slug}', array(
	'as'   => 'postCanon', 
	'uses' => 'PostController@postCanon'));
