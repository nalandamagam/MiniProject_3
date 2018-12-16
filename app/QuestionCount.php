<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionCount extends Model
{

    protected $casts = [
        'count' => 'int',
    ];

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
