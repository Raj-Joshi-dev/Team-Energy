<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IchimTeam2 extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
