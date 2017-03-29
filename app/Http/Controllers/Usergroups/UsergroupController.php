<?php

namespace App\Http\Controllers\Usergroups;

use App\Models\Meetups\Usergroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Meetup;

class UsergroupController extends Controller
{
    private $meetup;
    private $client;
    public function __construct(Meetup $meetup) {
        $this->meetup = new Meetup(array(
            'key' => env('MEETUP_KEY'),
        ));
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
