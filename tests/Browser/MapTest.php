<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MapTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testMap()
    {
        $this->browse(function ($browser) {
            $browser->visit('/map')
                    ->assertSee('PHPMap');
        });
    }
}
