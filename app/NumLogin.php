<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NumLogin extends Model
{
    protected $fillable = ['count'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
