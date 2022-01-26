<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_example()
    {
        $user = User::factory()->make();

        $this->actingAs($user,'admin')
        ->get('/');

    }
}
