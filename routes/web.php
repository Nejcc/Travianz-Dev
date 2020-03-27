<?php

Route::get('', 'HomeController@index')->name('index');
Route::get('/test', 'HomeController@test')->name('index');

Route::get('fields', 'FieldController@index')->name('fields')->middleware('village');
Route::get('village', 'VillageController@index')->name('village')->middleware('village');
Route::get('village', 'VillageController@index')->name('village');

Route::get('overview', 'Overview@index')->name('overview');
Route::get('statistics', 'StatisticController@index')->name('statistics');
Route::get('map', 'MapController@index')->name('map');
Route::get('plus', 'PlusController@index')->name('plus');

Route::resource('reports', 'ReportController')->only(['store', 'index', 'destroy', 'show']);
Route::resource('messages', 'MessageController')->only(['store', 'index', 'destroy', 'show']);
Route::resource('building', 'BuildingController')->only(['store', 'destroy', 'update', 'show']);
Route::get('profile/{id?}', 'ProfileController@show')->name('profile');


