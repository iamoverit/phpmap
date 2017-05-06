<?php

namespace App\Listeners\Teams;

use Mpociot\Teamwork\Events\UserInvitedToTeam;

class UserInvitedToTeamListener
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
     * @param  UserInvitedToTeam  $event
     * @return void
     */
    public function handle(UserInvitedToTeam $event)
    {
        //
    }
}
