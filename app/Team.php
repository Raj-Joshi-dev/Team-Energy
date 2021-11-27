<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
//    use SoftDeletes;
use HasFactory;

    protected $fillable = [
        'name', 'members', 'switch_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function switch_categories()
    {
        return $this->belongsToMany(SwitchCategory::class);
    }

}
