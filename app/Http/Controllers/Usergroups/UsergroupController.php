<?php

namespace App\Http\Controllers\Usergroups;

use App\Models\Meetups\Usergroup;
use App\Http\Controllers\Controller;

class UsergroupController extends Controller
{
    public function showGroup($slug)
    {
        $usergroup = Usergroup::where('slug', $slug)->first();

        return view('usergroups.show', compact('usergroup'));
    }

    public function getGroups()
    {
        return view('usergroups.list');
    }
}
