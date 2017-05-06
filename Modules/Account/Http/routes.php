<?php

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'account', 'namespace' => 'Modules\Account\Http\Controllers'], function () {
    Route::get('/', 'AccountController@index');
    Route::get('/edit', 'AccountController@edit');
    Route::post('/update', 'AccountController@update');
    Route::delete('/delete', 'AccountController@destroy');
});
