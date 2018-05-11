<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;

class DoctorSpecialisation extends Model
{

    public  function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}
