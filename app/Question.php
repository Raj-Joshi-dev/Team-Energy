<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'these1', 'these2'
    ];

    protected $primaryKey = 'tid';

}
