<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionViewDashboardTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testQuestionViewDashboardPage()
    {
        $response = $this->get('/questionChart');


        $response->assertStatus(200);
    }
}

/** This is to test whether the button on the user login dashboard is redirecting question view dashboard or not */

