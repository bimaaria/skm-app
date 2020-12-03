<?php

Route::get('/', 'DashboardController@index');
Route::get('/dashboard', 'DashboardController@index');

// Route for Respondent
Route::get('/respondent', 'RespondentController@index');
Route::post('/respondent', 'RespondentController@store');
Route::get('/respondent/create', 'RespondentController@create');
Route::get('/respondent/{id}/delete', 'RespondentController@delete');
