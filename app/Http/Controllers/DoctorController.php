<?php

namespace App\Http\Controllers;

use App\Pharmacist;
use Illuminate\Http\Request;
use App\Patient;
use App\User;
use Auth;
use PDF;
use App\DocPrescriptions;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class DoctorController extends Controller
{
    public function managePatient($user=NULL)
    {
        if(!is_null($user))
        {
            $record    =Patient::where('user',$user)->update(['active'=>0]);
            $user      =User::where('id',$user)->update(['active'=>0]);
            $data      =$this->getPatients();
            return view('Doctor.managePatient',compact('data'));
        }
        $data  =$this->getPatients();
        return view('Doctor.managePatient',compact('data'));
    }
    protected function getPatients()
    {
        $data =\DB::table('patients')
            ->join('users','users.id','=','patients.user')
            ->where('patients.active',1)
            ->where('doctor',\Auth::user()->id)
            ->get();
        return $data;

    }
    public  function addPatient()
    {
        return view('Doctor.addPatient');
    }
    public  function  oldRequests()
    {

        return view('Doctor.old');

    }
    public function newRequests($id =null)
    {
        if(is_null($id))
        {
            $id =\Auth::user()->id;
            $data  = \DB::table('prescriptions')
                ->join('doctors','doctors.id','=','prescriptions.doctor')
                ->where('prescriptions.doctor',$id)
                ->get();

            foreach($data as $item)
            {
                $patInfo   =\App\User::where('id',$item->patient)->get();
                foreach($patInfo as $type)
                {
                    $data2    =\DB::table('prescriptions')
                        ->join('users','users.id','=','prescriptions.patient')
                        ->where('prescriptions.patient',$type->id)
                        ->where('prescriptions.active',1)
                        ->select(\DB::raw(
                            "users.name,
                            users.surname,
                            prescriptions.id as ID,
                            prescriptions.symptoms,
                            prescriptions.date,
                            prescriptions.time"
                        ))
                        ->get();

                   // return $data2;
                    return view('Doctor.new',compact('data2'));
                }
            }

        }

        //return $id;
        $record =\App\Prescription::where('id',$id)->update(['active'=>0]);
        $data2  =\App\Prescription::where('active',1)->where('doctor',\Auth::user()->id)->get();
        return view('Doctor.new', compact('data2'));

    }
    public  function  prescribe($id)
    {
//        return $id;

        $data  =\DB::table('users')
            ->join('patients','users.id','=','patients.user')
            ->where('users.id',$id)
            ->where('users.active',1)
            ->first();
//        return \Response::json($data);
        $p  =Pharmacist::all();
        return view('Doctor.prescribe',compact('data','p'));
    }
    public  function newPrescription(Request $request)
    {

        $this->validator($request->all())->validate();

        $doc =new DocPrescriptions();
        $doc->doctor  =$request->doctor;
        $doc->patient   =$request->patient;
        $doc->pharmacist  =$request->pharmacist;
        $doc->dosage =$request->dosage;
        $doc->drug   =$request->drug;
        $doc->save();


        $doctor = \DB::table("users")->where('id',$request->doctor)->first(['name','surname','email']);

        $patient = \DB::table("users")
            ->join('patients','patients.user','=','users.id')
            ->where('users.id',$request->patient)
            ->first(['name','surname','email','address','gender','nationalId']);

        $pharmacist   = \DB::table("users")
            ->join('pharmacists','pharmacists.user','=','users.id')
            ->where('users.id',$request->pharmacist)
            ->first(['name','surname','email','address','pharmacyName']);
        $dose  =$request->dosage;
        $drug  =$request->drug;
        $now = Carbon::now();

        view()->share('doctor',$doctor);
        view()->share('patient',$patient);
        view()->share('pharmacist',$pharmacist);
        view()->share('dose',$dose);
        view()->share('drug',$drug);
        view()->share('now',$now);
        view()->share('id',$doc->id);

        if($request->has('download')){
            // Set extra option
            PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            $pdf = PDF::loadView('pdf.note');
            $docmnt = $pdf->download('pdf.note');
            return $docmnt;
        }


        return view('pdf.note');

    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'pharmacist' => 'required',
            'drug'=>'required',
            'dosage'=>'required'
        ]);
    }

    public function sendPdf(Request $request,$id)
    {
        if($request->has('download')){
            // Set extra option
            PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            $pdf = PDF::loadView('pdf.note');
            $docmnt = $pdf->download('pdf.note');
            return $docmnt;
        }
        //return redirect('doctor-dashboard');
    }
}
