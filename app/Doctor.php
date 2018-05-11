<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Doctor extends Model
{
    public function user()
    {
        return $this->hasMany(User::class,'user','id');
    }

    public function specialisations()
    {
        return $this->hasMany(DoctorSpecialisation::class, 'id', 'specialisation');
    }
}
