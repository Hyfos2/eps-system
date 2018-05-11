<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
//        DB::table('users')->insert([
//            'name'=>'Munya',
//            'surname'=>'Dobbie',
//            'email'=>'munya@gmail.com',
//            'password'=>bcrypt('zimbabwean'),
//            'userType'=>1,
//            'role_id'=>1,
//            'gender'=>'male',
//            'userName'=>'zimbabwean',
//            'lastLogin'=>'2018-01-10'
//        ]);
        

        \App\User::create([
            'name'=>'Tinashe',
            'surname'=>'Chihwa',
            'email'=>'chihwa@gmail.com',
            'password'=>bcrypt('zimbabwean'),
            'userType'=>    1,
            'role_id'=>1,
            'gender'=>'male',
            'userName'=>'zimbabwean',
            'lastLogin'=>'2018-01-10'
        ]);


        \App\User::create([
            'name'=>'Munashe',
            'surname'=>'Dobbie',
            'email'=>'dobbie@gmail.com',
            'password'=>bcrypt('zimbabwean'),
            'userType'=>2,
            'role_id'=>2,
            'gender'=>'female',
            'userName'=>'zimbabwean',
            'lastLogin'=>'2018-01-10'
        ]);


        \App\User::create([
            'name'=>'Munya',
            'surname'=>'Chiweshe',
            'email'=>'chiweshe@gmail.com',
            'password'=>bcrypt('zimbabwean'),
            'userType'=>3,
            'role_id'=>2,
            'gender'=>'male',
            'userName'=>'zimbabwean',
            'lastLogin'=>'2018-01-10'
        ]);


        \App\User::create([
            'name'=>'Panashe',
            'surname'=>'Munzwa',
            'email'=>'panashe@gmail.com',
            'password'=>bcrypt('zimbabwean'),
            'userType'=>4,
            'role_id'=>2,
            'gender'=>'male',
            'userName'=>'zimbabwean',
            'lastLogin'=>'2018-01-10'
        ]);
        
        
    }

}
