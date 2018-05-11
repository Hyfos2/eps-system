<?php

use Illuminate\Database\Seeder;

class userTypesTableSeeder extends Seeder
{

    public function run()
    {
        \App\UserType::create(['id'=>1,'name'=>'Super']);
        \App\UserType::create([  'id'=>2,'name'=>'Doctor']);
        \App\UserType::create(['id'=>3,'name'=>'Patient']);
        \App\UserType::create([  'id'=>4,'name'=>'Pharmacist']);
    }
}
