<?php

namespace App\Http\Controllers;

use App\DrugDatabase;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

class PharmacistController extends Controller
{
    public  function  dashboard()
    {
        return view('pharmacist.dashboard');
    }
    public function newDrug()
    {
        return view('pharmacist.newdrug');
    }

    public function manageDrug()
    {

       // $allDrugs =DrugDatabase::where('pharmacist',Auth::user()->id)->get();

        $allDrugs = DrugDatabase::all();
        return view('pharmacist.manageDrugs', compact('allDrugs'));
    }
    public function deleteDrug($id)
    {
        $drugRecord   = DrugDatabase::find($id)->delete();
        return back();
    }
    public function newPrescriptions()
    {
        return view('pharmacist.newPrescriptions');
    }
    public function oldPrescriptions()
    {
        return view('pharmacist.oldPrescriptions');
    }
    public function addDrug(Request $request)
    {
        //return $request->all();

        $this->validator($request->all())->validate();

        $drug             =new DrugDatabase();
        $drug->illness    =strtoupper($request->illness);
        $drug->sns        =$request->sns;
        $drug->treatment  =$request->treatment;
        $drug->dose       =$request->dose;
        $drug->fd         =$request->fd;
        $drug->pharmacist =$request->pharmacist;
        $drug->save();
        $notify  =\FlashAlert::success('Success', 'This is a success message.');
        return back()->with($notify);

    }
    protected function validator(array $data)
    {
        return Validator::make($data,
            [
                'illness'=>'required|unique:drug_databases',
                'sns'=>'required',
                'treatment'=>'required',
                'dose'=>'required',
                'fd'=>'required'
            ]);
    }




}
