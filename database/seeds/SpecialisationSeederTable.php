<?php

use Illuminate\Database\Seeder;

class SpecialisationSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\DoctorSpecialisation::create([
            'id'=>1,
            'specialisation'=>'Neurologist',
        ]);


        \App\DoctorSpecialisation::create([
            'id'=>2,
            'specialisation'=>'Neurosurgeon',
        ]);

        \App\DoctorSpecialisation::create([
            'id'=>3,
            'specialisation'=>'Audiologist',
        ]);
        \App\DoctorSpecialisation::create([
            'id'=>4,
            'specialisation'=>'Oncologist'
        ]);

    }
}
