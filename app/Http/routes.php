<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'home','uses'=>'FrontController@index']);
Route::post('/savefavorite',[
	'uses' => 'FavoritesController@store',
	'as' => 'savefavorite',
]);
Route::get('/savefavorite',[
	'uses' => 'FavoritesController@store',
	'as' => 'savefavorite',
]);
Route::get('/savefavorite2',[
	'uses' => 'FavoritesController@getAllFromUser',
	'as' => 'savefavorite2',
]);


Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
	Route::get('/', ['as'=>'admin.dashboard.index','uses'=>'DashboardController@index']);
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as'   => 'admin.users.destroy',
		
	]);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',[
		'uses' => 'CategoriesController@destroy',
		'as'   => 'admin.categories.destroy',
		'middleware' => 'auth'
	]);

	Route::resource('tags','TagsController');

	Route::get('tags/{id}/destroy',[
		'uses' => 'TagsController@destroy',
		'as'   => 'admin.tags.destroy',
	]);

	Route::resource('posts','PostsController');
	Route::get('posts/{id}/destroy',[
		'uses' => 'PostsController@destroy',
		'as'   => 'admin.posts.destroy',
	]);
	Route::resource('favorites','FavoritesController');
	Route::get('favorites/{id}/destroy',[
		'uses' => 'FavoritesController@destroy',
		'as'   => 'admin.favorites.destroy',
	]);

	Route::get('images',[
		'uses' => 'ImagesController@index',
		'as'   => 'admin.images.index'
	]);

	Route::resource('dashboard','DashboardController');

});

Route::auth();

Route::get('/home', 'HomeController@index');
