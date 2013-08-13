<?php

/*
|--------------------------------------------------------------------------
| View Modifiers
|--------------------------------------------------------------------------
|
*/
View::composer('templates.main', 'basicComposer');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function()
{
	return View::make('home');
});

/*
|--------------------------------------------------------------------------
| Links
|--------------------------------------------------------------------------
|
*/
Route::get('links', array(
	'as'   => 'linkList', 
	'uses' => 'LinkController@linkList'));

Route::get('links/{id}', array(
	'as'   => 'linkById', 
	'uses' => 'LinkController@linkById'))
->where('id', '[0-9]+');

Route::get('links/{categorySlug}/{subcategorySlug}/{slug}', array(
	'as'   => 'linkCanon', 
	'uses' => 'LinkController@linkCanon'));

Route::get('links/add', array(
	'as'   => 'linkAdd',
	'uses' => 'LinkController@linkAdd'
	));

Route::post('links/add', array(
	'as'   => 'linkPost',
	'uses' => 'LinkController@linkPost'
	));

/*
|--------------------------------------------------------------------------
| Feeds
|--------------------------------------------------------------------------
|
*/
Route::get('links/{categorySlug}', array(
	'as'   => 'categoryFeed',
	'uses' => 'FeedController@categoryFeed'));

Route::get('links/{categorySlug}/{subcategorySlug}', array(
	'as'   => 'subcategoryFeed',
	'uses' => 'FeedController@subcategoryFeed'));

/*
|--------------------------------------------------------------------------
| Posts
|--------------------------------------------------------------------------
|
*/
Route::get('posts', array(
	'as'   => 'postList', 
	'uses' => 'PostController@postList'));

Route::get('posts/{id}', array(
	'as'   => 'postById', 
	'uses' => 'PostController@postById'))
->where('id', '[0-9]+');

Route::get('posts/{categorySlug}/{subcategorySlug}/{slug}', array(
	'as'   => 'postCanon', 
	'uses' => 'PostController@postCanon'));
