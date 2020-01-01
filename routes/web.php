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

Route::get('/', 'pagesController@index');

route::get('/about' , 'pagesController@about');

route::get('/contact' , 'pagesController@contact');



//------------------- this is posts route ------------------------//


 route::resource('posts','PostsController');
 
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');



//-------------------- route for email ---------------------------//

Route::post('/dosend', 'PagesController@dosend');


//-------------------- route for comments ---------------------------//

route::post('/comments/{slug}','CommentsController@store')->name('comments.store');


//Tags 
Route::resource('tags','TagsController')->only('show'); // this mean used this controller and route only show and all method dont make route for there
Route::get('/home/tags', 'TagsController@index')->name('tags');


