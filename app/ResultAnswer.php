<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultAnswer extends Model
{
    protected $guarded = [];

    public function results()
    {
        return $this->belongsTo(Result::class);
    }
}
