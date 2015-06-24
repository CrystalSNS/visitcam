
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::get('index', 'IndexController@index');
Route::get('contact_us', 'ContactController@index');
Route::get('about_us', 'AboutController@index');
Route::get('about', 'ContactController@store');
Route::get('travel_guide', 'TraditionalController@index');
Route::get('geography_weather', 'GeographyController@index');
Route::get('history', 'HistoryController@index');
Route::get('religion', 'ReligionController@index');
Route::get('traditional_costume', 'TraditionalController@index');
Route::get('festival_event', 'FestivalController@index');
Route::get('currency', 'CurrencyController@index');
Route::get('transportation', 'TransportationController@index');
//----------Lyta
Route::get('provinces', 'ProvincesController@index');
Route::get('province_detail', 'ProvinceDetailController@index');
//----------  Cheata
Route::get('beach', 'TourBeachController@index');
Route::get('trekking', 'TourTrekkingController@index');
Route::get('biking', 'TourBikingController@index');
Route::get('golf', 'TourGolfController@index');
Route::get('province_detail', 'ProvinceDetailController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
?>