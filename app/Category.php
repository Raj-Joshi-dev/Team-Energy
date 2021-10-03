<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    protected $primaryKey = 'kat_id';

    public function results()
    {
       return $this->hasMany(Result::class);
    }
}
