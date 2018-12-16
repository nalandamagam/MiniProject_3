<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Question;
use App\QuestionCount;

class QuestionCountInsertionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $question = new Question();
        $question->body = 'Question body';
        $question->user()->associate(User::find(1));
        $question->save();
        $questionCount = new QuestionCount();
        $questionCount->count = 1;
        $questionCount->question()->associate($question);
        $questionCount->save();
        $this->assertDatabaseHas('question_counts', ['id'=>$questionCount->id]);
    }
}
