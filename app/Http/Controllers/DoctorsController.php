<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DoctorsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $search = request()->query('search');
        if($search){
            $doctors = Doctor::where('name', 'LIKE', "%{$search}%")->paginate(10);
        }else{
            $doctors = Doctor::paginate(10);
        }
        return view('doctors.index', compact('doctors'));
    }

    public function show($id){
        $doctor = Doctor::find($id);
        return view('doctors.show', compact('doctor'));
    }

    public function speciality($speciality){
        $speciality = Speciality::where('name', 'LIKE', $speciality)->get()[0];
        $doctors = Doctor::where('speciality_id', $speciality->id)->paginate(10);
        return view('doctors.index', compact('doctors'));
    }
    
}
