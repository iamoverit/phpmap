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

Route::group(['middleware' => 'forbid-banned-user'], function () {
    Route::get('/@{username}', 'Users\UserProfileController@showProfile');
    Route::get('/users', 'Site\UserController@getUsers');

    Route::get('/ug/{slug}', 'Usergroups\UsergroupController@showGroup');
    Route::get('/usergroups', 'Usergroups\UsergroupController@getGroups');
    Route::get('/map', 'Sites\SiteController@getMap');
});

Route::get('/', 'Sites\SiteController@index');

Route::get('/about', 'Sites\SiteController@getAbout');
Route::get('/imprint', 'Sites\SiteController@getImprint');

Route::get('/home', 'HomeController@index');

Route::get('/auth/github', 'Auth\SocialController@redirectToGithub');
Route::get('/auth/github/callback', 'Auth\SocialController@handleGithubCallback');

Auth::routes();
Route::get('auth/reauthenticate', 'Auth\LoginController@getReauthenticate');
Route::post('auth/reauthenticate', 'Auth\LoginController@postReauthenticate');

Route::impersonate();
Route::feeds();

Route::group(['prefix' => 'account'], function () {
    Route::get('/', 'Users\AccountController@getAccount');
    Route::post('/update', 'Users\AccountController@updateAccount');
    Route::get('/delete', 'Users\AccountController@deleteAccount');
});


/**
 * Teamwork routes
 */
Route::group(['prefix' => 'teams', 'namespace' => 'Teamwork'], function()
{
    Route::get('/', 'TeamController@index')->name('teams.index');
    Route::get('create', 'TeamController@create')->name('teams.create');
    Route::post('teams', 'TeamController@store')->name('teams.store');
    Route::get('edit/{id}', 'TeamController@edit')->name('teams.edit');
    Route::put('edit/{id}', 'TeamController@update')->name('teams.update');
    Route::delete('destroy/{id}', 'TeamController@destroy')->name('teams.destroy');
    Route::get('switch/{id}', 'TeamController@switchTeam')->name('teams.switch');

    Route::get('members/{id}', 'TeamMemberController@show')->name('teams.members.show');
    Route::get('members/resend/{invite_id}', 'TeamMemberController@resendInvite')->name('teams.members.resend_invite');
    Route::post('members/{id}', 'TeamMemberController@invite')->name('teams.members.invite');
    Route::delete('members/{id}/{user_id}', 'TeamMemberController@destroy')->name('teams.members.destroy');

    Route::get('accept/{token}', 'AuthController@acceptInvite')->name('teams.accept_invite');
});

Route::group(['middleware' => ['auth','reauthenticate']], function () {

    Route::get('user/test', function () {
        return 'Test';
    });

});