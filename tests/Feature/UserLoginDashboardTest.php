<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserLoginDashboardTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserLOginDashboardPage()
    {
        $response = $this->get('/loginChart');

        $response->assertStatus(200);
    }
}
/** This is to test whether the button on the question view dashboard is redirecting user login dashboard or not */
