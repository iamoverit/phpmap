<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                ->type('name', 'John Doe')
                ->type('username', 'johndoe')
                ->type('address', 'Little Rock, Arkansas, Vereinigte Staaten von Amerika')
                ->type('email', 'johndoe@example.com')
                ->type('password', 'phpmap123')
                ->type('password_confirmation', 'phpmap123')
                ->press('Register')
                ->assertPathIs('/@johndoe');
        });
    }
}
