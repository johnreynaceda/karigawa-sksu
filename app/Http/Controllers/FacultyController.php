<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(){
       
        if(auth()->user()->designations->count() > 1){
           return view('pages.designation');

        }else{
            session()->put('role', 5);
            return redirect()->route('faculty-dashboard');
        }
    }
    public function dashboard(){
          return view('faculty.dashboard');
    }
    public function pds(){
           
          return view('faculty.pds');
    }
    public function phdashboard(){
          return view('programhead.dashboard');
    }
    public function account(){
          return view('pages.designation');
    }
    public function application(){
          return view('faculty.application');
    }
    public function phapplication(){
          return view('programhead.application');
    }
    public function hrdashboard(){
            return view('hr.dashboard');
    }
    public function hrmonitor(){
            return view('hr.monitor');
    }
}
