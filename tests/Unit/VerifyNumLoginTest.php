<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\NumLogin;

class VerifyNumLoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVerifyNumLoginTest()
    {
        $userid = NumLogin::find(1)->user_id;
        $this->assertDatabaseHas('users', ['id'=>$userid]);
    }
}

// this is to test whether the user_id in num_login exists in the user table


