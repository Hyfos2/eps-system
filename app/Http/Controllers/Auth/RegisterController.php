<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class RegisterController extends Controller
{
    use RegistersUsers;
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'cellphone'=>'string|unique:users',
            'name'=>'required'
        ]);
    }

    protected function patienceValidator(array $data)
    {
        return Validator::make($data, [
            'nationalId' => 'required',
            'dob'=>'required|date',
            'address'=>'required|string',
            'allergies'=>'required',
            'currentMedication'=>'required',
            'presentComplaint'=>'required',
            'associatedSymptoms'=>'required',
            'timeCourse'=>'required',
            'relievingFactors'=>'required',
            'severity'=>'required',
            'smokingHistory'=>'required',
            'alcoholHistory'=>'required',
            'recreationalDrug'=>'required'
                  ]);
    }


    protected function create(array $data)
    {
        $user = User::create([
            'name' => ucfirst($data['name']),
            'email' =>strtolower($data['email']),
            'surname'=>ucfirst($data['surname']),
            'userType'=>$data['userType'],
            'role_id'=>$data['role_id'],
            'gender'=>ucfirst($data['gender']),
            'cellphone'=>$data['cellphone'],
            'userName'=>$this->generateRandomString(),
            'password' => bcrypt($this->generateRandomString())
        ]);

        //return $this->auth->attempt($user);
       // Auth::login($user);
        return $user;
    }

    public function randomNumber()
    {
        $num = "0123456789";
        $pass = array();
        $alphaLength = strlen($num) - 1;
        for ($i = 0; $i < 10; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $num[$n];
        }
        return implode($pass);
    }

    public function generateRandomString()
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 5; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }


}
