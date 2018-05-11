<?php

namespace App\Http\Controllers;

use App\DoctorSpecialisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Doctor;
use App\User;
use App\Pharmacist;

class AdminController extends Controller
{
   public function index()
   {
       return view('admin.dashboard');
   	//return view('pharmacist.dashboard');
   }

    public function patientDashboard()
    {

//        return view('admin.dashboard');
        return view('Doctor.dashboard');
    }
   public function doctorLogs()
   {
   	 return view('admin.doctorSeesions');
   }
    public function patientLogs()
   {
   	 return view('admin.patientSession');
   }

   public function pharmacistLogs()
   {
       return view('admin.pharmacistSession');
   }
   public function doctorSpecialisation()
   {
       $data        = DoctorSpecialisation::where('active',1)->get();
       return view('admin.doctorSpecialisation',compact('data'));
   }
   public function addSpecialisation(Request $request)
   {
       $this->validator($request->all())->validate();
       $specialty                  = new DoctorSpecialisation();
       $specialty->specialisation  = ucfirst($request->specialisation);
       $specialty->save();

       return back();

   }

   public function deleteSpecialisation($id)
   {
       $record   = DoctorSpecialisation::where('id',$id)->update(['active'=>0]);
       return back();

   }
   protected function validator(array $data)
    {
        return Validator::make($data,
            [
                'specialisation'=>'required|alpha|unique:doctor_specialisations'
            ]);
    }
    public function deleteDoctor($user)
    {
        //return $user;
        $record = Doctor::where('user',$user)->update(['active'=>0]);
        $user      =User::where('id',$user)->update(['active'=>0]);
        return back();
    }
   public function newDoctors()
   {
       $data   = DoctorSpecialisation::where('active',1)->get();
       return view('admin.addDoctor',compact('data'));
   }
   public function manageDoctors()
   {
       $data = \DB::table('doctors')
                    ->join('users','users.id','=','doctors.user')
                    ->join('doctor_specialisations','doctor_specialisations.id','=','doctors.specialisation')
                    ->where('doctors.active',1)
                    ->get();
       return view('admin.manageDoctors',compact('data'));
   }
   public function addPharmacist()
   {
       return view('admin.addPharmacist');
   }
   public function newPharmacist(Request $request)
   {
        return $request->all();
   }
   public function managePharmacist($user =NULL)
   {
       if(!is_null($user))
       {


           $record = Pharmacist::where('user',$user)->update(['active'=>0]);
           $user      =User::where('id',$user)->update(['active'=>0]);
           return back();
       }
        $data   =\DB::table('pharmacists')
            ->join('users','users.id','=','pharmacists.user')
            ->where('pharmacists.active',1)->get();
       return view('admin.managePharmacist',compact('data'));
   }

}
