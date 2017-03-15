<?php
/**
 * EventManager Routes
 */
Route::group(['namespace' => '\Duikb00t\EventManager\Controllers'], function () {
	Route::get('login', 'ManagerController@index');
});