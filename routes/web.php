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


Auth::routes();

Route::get('/test',function(){
  return App\User::find(1)->profile;
});
Route::get('/','FrontPageController@index')->name('front.page');

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'],function(){

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/post/create', 'PostsController@create')->name('post.create');
  Route::post('/post/store', 'PostsController@store')->name('post.store');
  Route::get('/post/index', 'PostsController@index')->name('post.index');
  Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
  Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete');
  Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');
  Route::get('/post/trashed', 'PostsController@trashed')->name('post.trashed');
  Route::get('/post/kill/{id}', 'PostsController@kill')->name('post.kill');
  Route::get('/post/restore/{id}', 'PostsController@restore')->name('post.restore');

  Route::get('/category/index', 'CategoriesController@index')->name('category.index');
  Route::get('/category/create', 'CategoriesController@create')->name('category.create');
  Route::post('/category/store', 'CategoriesController@store')->name('category.store');
  Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
  Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
  Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update');

  Route::get('/tag/index', 'TagsController@index')->name('tag.index');
  Route::get('/tag/create', 'TagsController@create')->name('tag.create');
  Route::post('/tag/store', 'TagsController@store')->name('tag.store');
  Route::get('/tag/edit/{id}', 'TagsController@edit')->name('tag.edit');
  Route::get('/tag/delete/{id}', 'TagsController@destroy')->name('tag.delete');
  Route::post('/tag/update/{id}', 'TagsController@update')->name('tag.update');


  Route::get('/user/index','UsersController@index')->name('user.index');
  Route::get('/user/create','UsersController@create')->name('user.create');
  Route::post('/user/store','UsersController@store')->name('user.store');
  Route::get('/user/delete','UsersController@destroy')->name('user.delete');
  Route::get('/user/admin/remove/{id}','UsersController@removeAdmin')->name('user.admin.remove');
  Route::get('/user/admin/add/{id}','UsersController@addAdmin')->name('user.admin.add');

  Route::get('/settings/index','SettingsController@index')->name('settings.index');
  Route::post('/settings/update','SettingsController@update')->name('settings.update');
});
