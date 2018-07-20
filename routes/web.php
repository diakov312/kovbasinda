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


Route::get('/', function () {
    return view('welcome');
});     //Start page

Route::get('/portfolio', 'PortfolioController@getPortfolioList')->name('portfolio');    //Page list of works
Route::get('/portfolioelement', 'PortfolioController@getPortfolioElement')->name('portfolioelement');//Page concrete work
Route::get('/hobbies', 'HobbyController@getHobbyList')->name('hobbies');    //Page list of hobbies
Route::get('/currhobby', 'HobbyController@getHobbyElement')->name('hobby'); //Page concrete hobby
Route::post('/sendFeedback', 'MailController@sendContactForm'); //Send main form communication

Route::group(['namespace'=>'Admin', 'middleware'=>['auth']], function () {
    Route::get('/adminpanel', 'AdminpanelController@index')->name('adminpanel');    //Page adminpanel
    Route::group(['middleware'=>['isadmin']], function () {
        Route::resource('/add_portfolio', 'PortfolioController', ['as' => 'admin']);    //Work with portfolio elements
        Route::resource('/add_hobby', 'HobbyController', ['as' => 'admin']);    //Work with hobby elements
    });
});
