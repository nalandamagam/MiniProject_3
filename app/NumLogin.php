<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NumLogin extends Model
{
    protected $fillable = ['count'];

    protected $casts = [
        'count' => 'int',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
