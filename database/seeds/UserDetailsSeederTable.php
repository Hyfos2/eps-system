<?php

use Illuminate\Database\Seeder;

class UserDetailsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Doctor::create([
            'id'=>1,
            'user'=>2,
            'specialisation'=>1,
            'consultation'=>'50',
            'cellphone'=>'0775635191',
            'address'=>'5 Tecoma groove',
            'active'=>1
        ]);

//
//        \App\Doctor::create([
//            'id'=>3,
//            'user'=>2,
//            'specialisation'=>1,
//            'consultation'=>'$50 per hour',
//            'address'=>'5 Rugare groove',
//            'active'=>1
//        ]);

        \App\Patient::create([
            'id'=>1,
            'user'=>3,
            'doctor'=>1,
            'address'=>'5 Chawora Street',
            'nationalId'=>'63-247724H38',
            'dob'=>'1994-05-23',
            'active'=>1,
            'currentMedication'=>'none',
            'allergies'=>'none',
            'inheritableDisease'=>'none',
            'associatedSymptoms'=>'none',
            'presentComplaint'=>'none',
            'timeCourse'=>'2 months',
            'relievingFactors'=>'none',
            'severity'=>'high',
            'smokingHistory'=>'never',
            'alcoholHistory'=>'never',
            'recreationalDrug'=>'never',
            'occupation'=>'manager'
        ]);

        \App\Pharmacist::create([
            'id'=>1,
            'user'=>4,
            'address'=>'33 Third Street , Gweru',
            'active'=>1,
            'pharmacyName'=>'Wise Pharmacy inc'
        ]);
    }
}
