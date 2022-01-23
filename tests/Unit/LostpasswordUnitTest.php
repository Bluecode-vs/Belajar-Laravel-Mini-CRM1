<?php

namespace Tests\Unit;

use Tests\TestCase;

class LostpasswordUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_halaman_Lost_Password()
    {
        $this->get('/lostpass')->assertStatus(200);
    }
}
