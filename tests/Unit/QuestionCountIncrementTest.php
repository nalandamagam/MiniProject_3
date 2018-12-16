<?php

namespace Tests\Unit;

use App\QuestionCount;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionCountIncrementTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $questionCount = QuestionCount::find(1);
        $count = $questionCount->count;
        $count = $count +1;
        $questionCount->count = $count;
        $questionCount->save();
        $questionCount1 = QuestionCount::find(1);
        $this->assertEquals($count, $questionCount1->count);
    }
}
