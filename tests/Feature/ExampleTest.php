<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_halaman_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSeeText('Mini CRM Virgo');
        $response->assertSeeText('Login');
    

    }
  
    // public function test_halaman_lostpassword()
    // {
    //     $response = $this->get('/lostpass');

    //     $response->assertStatus(200);
    // }

    // public function test_halaman_lostpassword2()
    // {
    //     $response = $this->get('/lostpass');

    //     $response->assertStatus(200);
    // }
  
}
