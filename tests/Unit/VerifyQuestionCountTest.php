<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\QuestionCount;
use App\Question;

class VerifyQuestionCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVerifyQuestionCount()
    {
        $questionid = QuestionCount::find(1)->question_id;
        $this->assertDatabaseHas('questions', ['id'=>$questionid]);    }
}


// This is to test whether the question id in the question count tables exists in the question table
