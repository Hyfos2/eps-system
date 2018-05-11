<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;


class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
