<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\NumLogin;

class NumLoginInsertionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user =  User::create([
            'email' => 'test1@test.com',
            'password' => Hash::make('password'),
        ]);
        $numLogin = new NumLogin();
        $numLogin->count = 1;
        $numLogin->user()->associate($user);
        $numLogin->save();
        $this->assertDatabaseHas('num_logins', ['id'=>$numLogin->id]);
    }
}
