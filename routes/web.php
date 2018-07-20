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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/portfolio', 'PortfolioController@getPortfolioList')->name('portfolio');
Route::get('/portfolioelement', 'PortfolioController@getPortfolioElement')->name('portfolioelement');
Route::get('/hobbies', 'HobbyController@getHobbyList')->name('hobbies');
Route::get('/currhobby', 'HobbyController@getHobbyElement')->name('hobby');
Route::post('/sendFeedback', 'MailController@sendContactForm');

Route::group(['namespace'=>'Admin', 'middleware'=>['auth']], function () {
    Route::get('/adminpanel', 'AdminpanelController@index')->name('adminpanel');
    Route::group(['middleware'=>['isadmin']], function () {
        Route::resource('/add_portfolio', 'PortfolioController', ['as' => 'admin']);
        Route::resource('/add_hobby', 'HobbyController', ['as' => 'admin']);
    });
});
