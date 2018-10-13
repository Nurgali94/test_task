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

Route::group([], function() {
   Route::get('/', 'IndexController@exec')->name('home');
   Route::get('/about', 'AboutController@exec')->name('about');
   Route::match(['get', 'post'], '/contact', 'ContactController@exec')->name('contact');
   Route::get('/page/{id}', 'PagesController@exec')->name('pages');
   Route::get('/allPages', 'AllPagesController@exec')->name('allPages');
   Route::get('/allPages/{req}', 'TestController@exec')->name('test');
   Route::auth();
});


//admin
 //Route::group(['prefix'=>'admin' , 'middleware' => 'auth'], function() {
//});
Route::prefix('admin')->group(function () {
 	Route::middleware('auth')->group(function () {
 		//admin/
		Route::get('/', function() {
			if(view()->exists('admin.index')) {
				$data = ['title' => 'Админ панель'];
				return view('admin.index', $data);
			}
		});
		//admin/news
		Route::prefix('news')->group(function () {
			//admin/news
			Route::get('/', 'NewsController@exec')->name('news');
			//admin/news/add
			Route::match(['get', 'post'], '/add', 'NewsAddController@exec')->name('newsAdd');
			//admin/news/edit/2
			Route::match(['get', 'post', 'delete'], '/edit/{news}', 'NewsEditController@exec')->name('newsEdit');
		});
		//admin/pages
		// Route::group(['prefix'=>'pages'], function() {
		// 	//admin/pages/
		// 	Route::get('/', ['uses' => 'PagesController@exec', 'as' => 'pages']);
		// 	//admin/pages/add
		// 	Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddController', 'as'=>'pagesAdd']);
		// 	//admin/pages/edit/2
		// 	Route::match(['get', 'post', 'delete'], ['uses'=>'PagesEditController', 'as'=>'pagesEdit']);
		// });
 	});
});

Auth::routes();
