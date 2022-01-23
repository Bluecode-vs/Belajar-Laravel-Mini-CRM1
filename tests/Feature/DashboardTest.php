<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;
    public function test_Home_Page()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $this->actingAs($user);

        // yg mau di cek
        $response = $this->get(url('/home'));
        $response->assertStatus(200);
    }

    public function test_Dari_Home_Page_Redirect_Ke_Halaman_Crcompany()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $this->actingAs($user);

        // yg mau di cek
        $response = $this->get(url('/Crcompany'));
        $response->assertStatus(200);
    }

    public function test_Dari_Home_Page_Redirect_Ke_Halaman_Crkaryawan()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $this->actingAs($user);

        // yg mau di cek
        $response = $this->get(url('/Crkaryawan'));
        $response->assertStatus(200);
    }

    public function test_Dari_Home_Page_Redirect_Ke_Halaman_Table_karyawan()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $this->actingAs($user);

        // yg mau di cek
        $response = $this->get(url('/karyawan'));
        $response->assertStatus(200);
    }
    public function test_Dari_Home_Page_Redirect_Ke_Halaman_Table_company()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $this->actingAs($user);

        // yg mau di cek
        $response = $this->get(url('/company'));
        $response->assertStatus(200);
    }

}
