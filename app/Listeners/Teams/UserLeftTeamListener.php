<?php

namespace App\Listeners\Teams;

use Mpociot\Teamwork\Events\UserLeftTeam;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
