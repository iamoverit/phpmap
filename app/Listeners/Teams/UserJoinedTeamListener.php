<?php

namespace App\Listeners\Teams;

use Mpociot\Teamwork\Events\UserJoinedTeam;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserJoinedTeamListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserJoinedTeam  $event
     * @return void
     */
    public function handle(UserJoinedTeam $event)
    {
        //
    }
}
