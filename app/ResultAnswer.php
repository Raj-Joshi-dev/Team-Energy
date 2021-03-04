<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultAnswer extends Model
{
    public function result()
    {
        return $this->belongsTo(Result::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
