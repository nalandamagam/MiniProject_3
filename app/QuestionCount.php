<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionCount extends Model
{

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
