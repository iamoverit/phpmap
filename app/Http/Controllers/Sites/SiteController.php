<?php

namespace App\Http\Controllers\Sites;

use App\Http\Controllers\Controller;
use App\User;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getMap()
    {
        return view('map');
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
