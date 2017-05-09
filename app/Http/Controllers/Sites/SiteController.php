<?php

namespace App\Http\Controllers\Sites;

use App\User;
use App\Models\Meetups\Usergroup;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getMap()
    {
        $users = User::all();
        $usergroups = Usergroup::all();

        return view('map', compact('users', 'usergroups'));
    }

    public function getAbout()
    {
        $sponsors = User::where('is_sponsor', 1)->get();

        return view('pages.about', compact('sponsors'));
    }

    public function getImprint()
    {
        return view('pages.imprint');
    }
}
