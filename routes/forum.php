<?php

Route::get('/threads', 'Forum\ThreadsController@index');
Route::get('/threads/create', 'Forum\ThreadsController@create');
Route::get('/threads/{channel}/{thread}', 'Forum\ThreadsController@show');
Route::delete('/threads/{channel}/{thread}', 'Forum\ThreadsController@destroy');
Route::post('/threads', 'Forum\ThreadsController@store');
Route::get('/threads/{channel}', 'Forum\ThreadsController@index');
Route::post('/threads/{channel}/{thread}/replies', 'Forum\RepliesController@store');
Route::patch('/replies/{reply}', 'Forum\RepliesController@update');
Route::delete('/replies/{reply}', 'Forum\RepliesController@destroy');
Route::post('/replies/{reply}/favorites', 'Forum\FavoritesController@store');
Route::post('/replies/{reply}/favorites', 'Forum\FavoritesController@store');
Route::delete('/replies/{reply}/favorites', 'Forum\FavoritesController@destroy');
