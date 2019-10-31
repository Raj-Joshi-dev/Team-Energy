<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IchimTeam1 extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
