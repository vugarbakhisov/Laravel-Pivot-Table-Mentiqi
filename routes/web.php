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



Route::get('/','FrontController@index')->name('front.index');
Route::get('/news/{id}','FrontController@news')->name('front.news');


Route::get('/admin','AdminController@get_index')->name('admin.index');
Route::get('/admin/get','AdminController@categories_get')->name('get.insert');
Route::post('admin/save','AdminController@categories_save')->name('categories.save');
Route::get('/admin/uptade/{id}','AdminController@update')->name('update');
Route::post('admin/save/{id}','AdminController@save')->name('edit.save');
Route::post("/admin/locale",'AdminController@locale');
Route::get('/admin/get/delete/{id}','AdminController@delete')->name('get.delete');


//Post route

Route::get('/admin/post','NewsController@post_index')->name('post.index');
Route::get('/admin/news/insert','NewsController@news_insert')->name('news.insert');
Route::post('/admin/news/save','NewsController@news_save')->name('news.save');
Route::get('/admin/news/edit/we{id}','NewsController@news_edit')->name('news.edit');
Route::post('/admin/news/edit/save/{id}','NewsController@news_edit_save')->name('news.edit.save');
Route::get('/admin/news/delete/{id}','NewsController@delete')->name('news.delete');
Route::get('/admin/news/image/delete/{id}','NewsController@delete_image')->name('image.delete');
Route::get('/admin/change_status/{id}' , 'NewsController@change_status')->name('news.change_status');

//Route::resource('/admin/news', 'NewsController');


//Route::post('/admin/news/save','NewsController@save')->name('news.save');

