<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
//    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
