<?php

namespace App\Listeners\Teams;

use Mpociot\Teamwork\Events\UserJoinedTeam;

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
