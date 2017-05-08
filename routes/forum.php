<?php

Route::get('/threads', 'Forum\ThreadController@index');
Route::get('/threads/create', 'Forum\ThreadController@create');
Route::get('/threads/{channel}/{thread}', 'Forum\ThreadController@show');
Route::delete('/threads/{channel}/{thread}', 'Forum\ThreadController@destroy');
Route::post('/threads', 'Forum\ThreadController@store');
Route::get('/threads/{channel}', 'Forum\ThreadController@index');
Route::post('/threads/{channel}/{thread}/replies', 'Forum\RepliesController@store');
Route::patch('/replies/{reply}', 'Forum\RepliesController@update');
Route::delete('/replies/{reply}', 'Forum\RepliesController@destroy');
Route::post('/replies/{reply}/favorites', 'Forum\FavoritesController@store');
Route::post('/replies/{reply}/favorites', 'Forum\FavoritesController@store');
Route::delete('/replies/{reply}/favorites', 'Forum\FavoritesController@destroy');
