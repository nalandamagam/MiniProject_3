<?php

namespace Tests\Unit;

use App\NumLogin;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NumLoginIncrementTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $numLogin = NumLogin::find(1);
        $count = $numLogin->count;
        $count = $count + 1;
        $numLogin->count = $count;
        $numLogin->save();
        $numLogin2 = NumLogin::find(1);
        $this->assertEquals($count, $numLogin2->count);
    }
}
