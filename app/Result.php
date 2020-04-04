<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    
    protected $primaryKey = 'answer_id';

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
