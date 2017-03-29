<?php

namespace App\Http\Controllers\Usergroups;

use App\Helpers\Meetup;
use App\Models\Meetups\Usergroup;
use App\Http\Controllers\Controller;

class UsergroupController extends Controller
{
    private $meetup;
    private $client;

    public function __construct(Meetup $meetup)
    {
        $this->meetup = new Meetup([
            'key' => env('MEETUP_KEY'),
        ]);
    }

    public function showGroup($slug)
    {
        $usergroup = Usergroup::where('slug', $slug)->first();

        return view('usergroups.show', compact('usergroup'));
    }

    public function getGroups()
    {
        return view('usergroups.list');
    }

    public function getMeetups()
    {
    }
}
