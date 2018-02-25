<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', function(){
	return App\Profile::find(1)->user;
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/home', [
		'uses' => 'HomeController@index',
		'as' => 'home'
	]);


	// *
	// Post Section
	// *

	Route::get('/posts', [
		'uses' => 'PostsController@index',
		'as' => 'posts'
	]);

	Route::get('/trash', [
		'uses' => 'PostsController@trashed',
		'as' => 'trashed'
	]);

	Route::get('/kill/{id}', [
		'uses' => 'PostsController@kill',
		'as' => 'post.kill'
	]);

	Route::get('/restore/{id}', [
		'uses' => 'PostsController@restore',
		'as' => 'post.restore'
	]);

	Route::get('post/create', [
		'uses' => 'PostsController@create',
		'as' => 'post.create'
	]);

	Route::post('/post/store', [
		'uses' => 'PostsController@store',
		'as' => 'post.store'
	]);

	Route::get('/post/edit/{id}', [
		'uses' => 'PostsController@edit',
		'as' => 'post.edit'
	]);

	Route::get('/post/trash/{id}', [
		'uses' => 'PostsController@destroy',
		'as' => 'post.delete'
	]);

	Route::post('/post/update/{id}', [
		'uses' => 'PostsController@update',
		'as' => 'post.update'
	]);

	// *
	// Category Section
	// *


	Route::get('/categories', [
		'uses' => 'CategoriesController@index',
		'as' => 'categories'
	]);
	
	Route::get('/category/create', [
		'uses' => 'CategoriesController@create',
		'as' => 'category.create'
	]);

	Route::post('/category/store', [
		'uses' => 'CategoriesController@store',
		'as' => 'category.store'
	]);

	Route::get('/category/edit/{id}', [
		'uses' => 'CategoriesController@edit',
		'as' => 'category.edit'
	]);

	Route::get('/category/delete/{id}', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'category.delete'
	]);

	Route::post('/category/update/{id}', [
		'uses' => 'CategoriesController@update',
		'as' => 'category.update'
	]);

	// *
	// tags Section
	// *
	Route::get('/tags', [
		'uses' => 'TagsController@index',
		'as' => 'tags'
	]);

	Route::get('/tags/create', [
		'uses' => 'TagsController@create',
		'as' => 'tags.create'
	]);

	Route::post('/tags/store', [
		'uses' => 'TagsController@store',
		'as' => 'tags.store'
	]);

	Route::get('/tags/edit/{id}', [
		'uses' => 'TagsController@edit',
		'as' => 'tags.edit'
	]);

	Route::get('/tags/delete/{id}', [
		'uses' => 'TagsController@destroy',
		'as' => 'tags.delete'
	]);

	Route::post('/tags/update/{id}', [
		'uses' => 'TagsController@update',
		'as' => 'tags.update'
	]);

	// *
	// users section
	// *

	Route::get('/users', [
		'uses' => 'UsersController@index',
		'as' => 'users'
	]);

	Route::get('/users/delete{id}',[
		'uses' => 'UsersController@destroy',
		'as' => 'users.delete'
	]);

	Route::get('/users/create',[
		'uses' => 'UsersController@create',
		'as' => 'user.create'
	]);

	Route::post('/users/store',[
		'uses' => 'UsersController@store',
		'as' => 'user.store'
	]);

	Route::get('/users/admin{id}',[
		'uses' => 'UsersController@admin',
		'as' => 'user.admin'
	])->middleware('admin');

	Route::get('/users/not_admin{id}',[
		'uses' => 'UsersController@not_admin',
		'as' => 'user.not_admin'
	]);

	// *
	// edit profile section
	// *

	Route::get('/users/profile/',[
		'uses' => 'ProfilesController@index',
		'as' => 'user.profile'
	]);

	Route::post('/users/profile/update',[
		'uses' => 'ProfilesController@update',
		'as' => 'user.profile.update'
	]);
});
