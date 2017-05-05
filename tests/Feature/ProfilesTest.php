<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfilesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function a_user_has_a_profile()
    {
        $user = create('App\User');

        $this->get("/@" . $user->username)
            ->assertSee($user->username);
    }

    /** @test */
    function profiles_display_all_threads_created_by_the_associated_user()
    {
        $this->signIn();

        $thread = create('App\Models\Forum\Thread', ['user_id' => auth()->id()]);

        $this->get("/@" . auth()->user()->username)
            ->assertSee($thread->title)
            ->assertSee($thread->body);

    }
}