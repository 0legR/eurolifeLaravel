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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware'=>'web'], function(){
	Route::match(['get', 'post'], '/', ['as'=>'home', 'uses' => 'IndexController@execute']);
	Route::get('/page/{alias}', ['uses' => 'PageController@execute', 'as' => 'page']);

	Route::auth();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	//   /admin/
	Route::get('/', function(){

	});
	//   /admin/pages/
	Route::group(['prefix'=>'pages'], function() {
		//   /admin/pages/
		Route::get('/', ['uses' => 'PagesController@execute', 'as'=>'pages']);
		//  /admin/pages/add
		Route::match(['get', 'post'], '/add', ['uses' => 'PagesAddController@execute', 'as' => 'pagesAdd']);
		//  /admin/pages/edit/{page}
		Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses' => 'PagesEditController@execute', 'as' => 'pagesEdit']);

	});

	//   /admin/portfolio/
	Route::group(['prefix'	=> 'portfolio'], function(){
		//  /admin/portfolio/
		Route::get('/', ['uses'=> 'PortfolioController@execute', 'as' => 'portfolios']);
		//  /admin/portfolio/add
		Route::match(['get', 'post'], '/add', ['uses' => 'PortfolioAddController@execute', 'as' => 'portfolioAdd']);
		//  /admin/portfolio/edit/{portfolio}
		Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses' => 'PortfolioEditController@execute', 'as' => 'portfolioEdit']);
	});
	
	//   /admin/services/
	Route::group(['prefix'=>'services'], function() {
		//   /admin/sevices/
		Route::get('/', ['uses' => 'ServicesController@execute', 'as'=>'services']);
		//  /admin/services/add
		Route::match(['get', 'post'], '/add', ['uses' => 'ServicesAddController@execute', 'as' => 'servicesAdd']);
		//  /admin/services/edit/{services}
		Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses' => 'ServicesEditController@execute', 'as' => 'servicesEdit']);

	});
});