<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'team_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    protected $primaryKey = 'id';

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function result_answers()
    {
        return $this->hasMany(ResultAnswer::class);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Check if the user belongs to Admin Team
     * @param string $team
     * @return bool
     */

    public function isAdmin(string $team)
    {
        return $this->team()->where('name', $team)->exists();
    }
}
