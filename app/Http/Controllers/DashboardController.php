<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prescription;
use App\Models\Medicine;
use App\Models\Doctor;

class DashboardController extends Controller
{
    public function dashboard(){
        if (!session()->has('doctorId')){
            $prescription = Prescription::all();
            $i = 1;
            return view('users.prescription',compact('prescription','i'));
        }
    }

    public function medicines(){
        if (!session()->has('doctorId')){
            $medicines = Medicine::all();
            $i = 1;
            return view('users.medicines',compact('medicines','i'));
        }
    }

    public function profile(){
        if (!session()->has('doctorId')){
            $profile = Doctor::find(1);
            $i = 1;
            return view('users.profile',compact('profile','i'));
        }
    }

    public function addPrescription(){
        if (!session()->has('doctorId')){
            $data = request()->validate([
                'medicine_name'=>'required|min:3|max:50',
                'description'=>'required|min:3|max:255',
                'how_often'=>'required|min:3|max:100',
                'patient_name'=>'required|min:1|max:50',
                'doctor_id'=>'required'
            ]);
            $data = Prescription::create($data);
            $medicines = request()->validate([
                'medicine_name'=>'required|min:3|max:50',
                'description'=>'required|min:3|max:255',
                'how_often'=>'required|min:3|max:100',
            ]); 
            $medicines = Medicine::create($medicines);
            return redirect()->route('profile')->with('success','The prescription has been successfully written');
        }
    }

    public function doctors(){
        if (!session()->has('doctorId')){
            $doctors = Doctor::all();
            $i = 1;
            return view('users.doctors',compact('doctors','i'));
        }
    }
    public function logout(){
        if (!session()->has('doctorId')){
            session()->forget('doctorId');
            return redirect()->route('home');
        }
    } 
}
