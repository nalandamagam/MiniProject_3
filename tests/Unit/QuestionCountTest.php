<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\QuestionCount;


class QuestionCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testQuestionCountTest()
    {
        $questioncount = QuestionCount :: find(1);
        $this->assertInternalType('int', $questioncount->count);
    }
}
