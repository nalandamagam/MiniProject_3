<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserLoginchart()
    {
        $response = $this->get('/loginChart');

        $response->assertStatus(200);
    }
}
