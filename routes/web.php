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

Route::get('/','SearchController@homeIndex');  //This is main
Route::get('/search', 'SearchController@index');	//search result page with blank.

Route::post('/search', 'SearchController@search')->name('search'); //search result page with result page.


Route::get('/about', function(){
	return view('about.index');
});



Route::post('/more_result', 'SearchController@moreResult'); //this is for more result


Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function(){
	Route::get('/', function(){
		return view('admin.index');
	})->name('admin.index');

	Route::resource('restrict', 'RestrictController');

	Route::get('/user_request_list', 'UserManagementController@showRequests')->name('user_request_list');
	Route::get('/user_accept/{id}', 'UserManagementController@acceptUser')->name('user_accept');


	Route::get('/restrict_url_report', 'MakeReportController@index')->name('make_report');

	Route::get('/restrict_request', 'AdminRequestController@index')->name('restrict_request');


	Route::post('/accept_request{id}','AdminRequestController@acceptRequest')->name('accept_request');
	Route::post('/reject_request{id}','AdminRequestController@rejectRequest')->name('reject_request');


	Route::get('/search_keywords', 'SearchKeywordsController@viewall')->name('search_keyword_list');
	Route::get('/frequently_search_keywords', 'SearchKeywordsController@freqview')->name('freq_keyword_list');
	

});



Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('test', 'SearchController@testSearch');