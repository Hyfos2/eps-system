<?php

namespace App\Http\Controllers;

use App\Prescription;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Doctor;
use App\Patient;

class PatientController extends Controller
{
    public function  index()
    {
        return view('patient.dashboard');
    }

    public  function newConsultation()
    {

        $data = \DB::table('doctors')
            ->join('users','users.id','=','doctors.user')
            ->join('doctor_specialisations','doctor_specialisations.id','=','doctors.specialisation')
            ->where('doctors.active',1)
            ->get();
                return view('patient.doctors',compact('data'));
    }

    public  function  doctorInfo($user,$address)
    {
        $data = \DB::table('doctors')
            ->join('users','users.id','=','doctors.user')
            ->join('doctor_specialisations','doctor_specialisations.id','=','doctors.specialisation')
            ->where('doctors.active',1)
            ->where('users.id',$user)
            ->where('doctors.address',$address)
            ->first();

            $user = $data->user;
        return view('patient.appointment',compact('user'));

    }

    public  function  newAppointment(Request $request)
    {

//        $doctor   =Doctor::where('user',$request->doctor)->first();
//        $patient  =Patient::where('user',\Auth::user()->id)->first();

        $this->validator($request->all())->validate();
        $record            =new Prescription();
        $record->symptoms  =$request->symptoms;
        $record->doctor    =$request->doctor;
        $record->patient   =\Auth::user()->id;
        $record->date      =$request->date;
        $record->time      =$request->time;
        $record->save();

        return "saved";

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'symptoms' => 'required',
            'date'=>'required',
            'time'=>'required'
        ]);
    }

}
