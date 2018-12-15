<?php

use Illuminate\Database\Seeder;

class QuestionCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = App\Question::all();
        $questions->each(function ($question) {
            $questionCount = factory(\App\NumLogin::class)->make();
            $questionCount->user()->associate($question);
            $questionCount->save();
        });
    }
}
