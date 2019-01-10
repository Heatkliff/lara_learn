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
//
Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('admin-lte', function () {
//
//    return view('welcome2');
//
//});
//
//Route::get('all-pages', function () {
//    $pages = App\Pages::allpages(1);
//    dd($pages);
//    return view('welcome2');
//
//});


Route::get('/all-pages','PagesController@allpages');
Route::get('/author-pages/{id}','PagesController@page_from_author');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/', 'AdminController@index');
    Route::get('pages', 'AdminController@getPages');
    Route::get('users', 'AdminController@getUsers');
    Route::get('/edit/page-{id}', 'AdminController@editPages');
});

Auth::routes();
