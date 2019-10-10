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

/*
*	Routes for login/logout
*/
Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLogin']);
Route::post('/login', ['as' => 'processLogin','uses' => 'Auth\LoginController@processLogin']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

/*
*	Basic pages
*/

Route::middleware(['auth', 'checkblock'])->group(function() {
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/vendors',['as'=>'vendorslist', 'uses' => 'VendorsController@index']);

	// View a Vendor
	Route::get('/view/{cid}', function ($cid) {
		return view('view',[$cid]);
	})->where('id', '[0-9]+');

	// Delete a Vendor
	Route::get('/vendors/delete/{id}', 'VendorsController@deleteVendor')->where('id','[0-9]+');

	// Edit a Vendor
	Route::get('/vendors/edit/{id}', function($id) {
		return view('VendorsController@editVendor', $id);	
	})->where('id','[0-9]+');

	// Put a Vendor to inactive
	Route::get('/vendors/update/{id}', function($id) {
		return view('VendorsController@updateVendor', $id);
	})->where('id','[0-9]+');

	// Add a new Vendor
	Route::get('/vendors/add', function() {
		return view('VendorsController@addVendor');
	});

	Route::get('/vendors/confirm/{id}','VendorsController@confirmDelete');

	/*
	*	Routes for History
	*/
	Route::get('/history', 'HistoryController@listHistory');
});

	Route::get('/blocked', 'HomeController@blockedUser')->middleware('auth');




