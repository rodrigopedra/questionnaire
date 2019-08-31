<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    protected $with = ['answer', 'question'];

    public function test()
    {
        return $this->belongsTo('App\Models\Test');
    }

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }

    public function answer()
    {
        return $this->hasOne('App\Models\Answer');
    }
}
