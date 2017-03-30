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

Route::get('/', 'Sites\SiteController@index');
Route::get('/map', 'Sites\SiteController@getMap');
Route::get('/about', 'Sites\SiteController@getAbout');
Route::get('/imprint', 'Sites\SiteController@getImprint');

Auth::routes();
Route::get('/auth/github', 'Auth\SocialController@redirectToGithub');
Route::get('/auth/github/callback', 'Auth\SocialController@handleGithubCallback');

Route::get('/roadmap', 'Site\RoadmapController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/test', function () {
    dd(auth()->user());
});

Route::get('/@{username}', 'Users\UserProfileController@showProfile');
Route::get('/users', 'Site\UserController@getUsers');

Route::get('/ug/{slug}', 'Usergroups\UsergroupController@showGroup');
Route::get('/usergroups', 'Usergroups\UsergroupController@getGroups');

Route::impersonate();
Route::feeds();

Route::get('/test', function () {
    $url = 'https://api.meetup.com/find/groups?key=1b3430377b18196b6d1fb372d177a77&radius=global&filter=all&sign=true&photo-host=secure&text=php&is_simplehtml=true';
    $meetups = json_decode(file_get_contents($url));

    foreach ($meetups as $meetup) {
        if ($meetup->key_photo) {
            echo $meetup->key_photo->highres_link;
        }
    }
});
