<?php

namespace App\Listeners\Teams;

use Mpociot\Teamwork\Events\UserLeftTeam;

class UserLeftTeamListener
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
     * @param  UserLeftTeam  $event
     * @return void
     */
    public function handle(UserLeftTeam $event)
    {
        //
    }
}
