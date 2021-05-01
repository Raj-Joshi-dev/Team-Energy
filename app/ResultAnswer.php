<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResultAnswer extends Model
{
    use SoftDeletes;

    public function result()
    {
        return $this->belongsTo(Result::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
