<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $user = factory(User::class)->create([
            'username' => 'johndoe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('phpmap123'),
        ]);

        $this->browse(function ($browser) {
            $browser->visit('/login')
                ->type('email', 'johndoe@example.com')
                ->type('password', 'phpmap123')
                ->press('Login')
                ->assertPathIs('/@johndoe');
        });
    }
}
