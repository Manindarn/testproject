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


Route::get('/', function () {
    return view('welcome');

});

Route::view('/testpage', 'test');

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/user', 'UserController@index');

//Route::get('/abouus', 'StaticpageController@aboutus')->name('aboutus');

//Route::get('/userprofile', 'ProfilrController@index')->name('profile');
//Route::get('/records', 'ProfileController@index')->name('profile');
Route::get('/named', 'PageController@termsofuse')->name('terms');

Route::get('named', function() {
    return view('terms');
})->name('test');

//Named Routes example

//Route::get('contact_us', ['as' => 'contact', 'uses' => 'PageController@getcontact']);
Route::get('contact_usss', 'PageController@getcontact')->name('contact');

//Route::get('/userprofile', 'UserProfileController@index');

//Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
//Route::get('/uprofile', 'HomeController@getprofile');

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/profile', 'HomeController@admin');
    Route::get('/uprofile', 'HomeController@getprofile');

    //Route::get('/userprofile', 'UserProfileController@index');
});

	



