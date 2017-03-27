<?php
/**
 * EventManager Routes
 */
Route::group(['prefix' =>'manager' ,'namespace' => '\Duikb00t\EventManager\Controllers'], function () {
	Route::get('login', 'ManagerController@index');
});


/**
 * Scan at Even QR and valiate
 */
Route::group(['namespace' => '\Duikb00t\EventManager\Controllers'], function() {
	Route::get('scan/{id}', 'ScanController@validateTicket');
});
