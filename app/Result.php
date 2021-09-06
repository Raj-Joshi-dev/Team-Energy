<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function result_answers()
    {
        return $this->hasMany(ResultAnswer::class);
    }
}
