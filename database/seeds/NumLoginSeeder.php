<?php

use Illuminate\Database\Seeder;

class NumLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();

        $users->each(function ($user) {
            $numLogin = factory(\App\NumLogin::class)->make();
            $numLogin->user()->associate($user);
            $numLogin->save();
        });
    }
}
