<?php

Route::resource('users', 'Api\Users\UserController');
Route::resource('meetups', 'Api\Meetups\MeetupController');

Route::resource('snippets', 'Api\Snippets\SnippetsController');
