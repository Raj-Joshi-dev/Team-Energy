<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwitchCategory extends Model
{
//    use HasFactory;

    public function teams()
    {
       return $this->belongsToMany(Team::class);

    }
}
