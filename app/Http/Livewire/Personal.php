<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PhilippineProvince;
use App\Models\PhilippineCity;
use App\Models\PhilippineBarangay;
use App\Models\PermanentAddress;
use App\Models\TemporaryAddress;
use App\Models\UserInformation;
class Personal extends Component
{
    public $surname;
    public $extension;
    public $firstname;
    public $middlename;
    public $birthdate;
    public $birthplace;
    public $sex;
    public $status;
    public $citizenship;
    public $height;
    public $weight;
    public $bloodtype;
    public $gsis;
    public $pagibig;
    public $philhealth;
    public $sss;
    public $tin;
    public $agency;
    public $telephone;
    public $mobile;
    public $email;
    public $permanentprovince = 1265;
    public $permanentcity = [];
    public $permanentcityid;
    public $permanentblock;
    public $permanentstreet;
    public $permanentsubdivision;
    public $permanentzipcode;
    public $permanentbarangay = [];
    public $permanentbarangayid;
    public $temporaryprovince = 1265;
    public $temporarycity = [];
    public $temporarycityid;
    public $temporaryblock;
    public $temporarystreet;
    public $temporarysubdivision;
    public $temporaryzipcode;
    public $temporarybarangay = [];
    public $temporarybarangayid;

 
    public function updatedPermanentcityid(){
        $this->permanentbarangay = PhilippineBarangay::where('city_municipality_code', $this->permanentcityid)->get();
    }
    public function updatedTemporarycityid(){
        $this->temporarybarangay = PhilippineBarangay::where('city_municipality_code', $this->temporarycityid)->get();
    }
    
    public function render()
    {
        
        $this->permanentcity = PhilippineCity::where('province_code', $this->permanentprovince)->get();
        $this->temporarycity = PhilippineCity::where('province_code', $this->temporaryprovince)->get();
        return view('livewire.pds.stepper.personal',[
            'provinces' => PhilippineProvince::get(),
        ]);
    }

    public function save(){
        $this->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'surname' => 'required',
            'extension' => 'required',
            'birthdate' => 'required',
            'birthplace' => 'required',
            'sex' => 'required',
            'status' => 'required',
            'citizenship' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'weight' => 'required',
            'bloodtype' => 'required',
            'gsis' => 'required',
            'pagibig' => 'required',
            'philhealth' => 'required',
            'sss' => 'required',
            'tin' => 'required',
            'agency' => 'required',
            'telephone' => 'required',
            'mobile' => 'required',
            'email' => 'required',

            'permanentcityid' => 'required',
            'permanentbarangayid' => 'required',
            'permanentblock' => 'required',
            'permanentstreet' => 'required',
            'permanentsubdivision' => 'required',
            'permanentzipcode' => 'required',

            'temporarycityid' => 'required',
            'temporarybarangayid' => 'required',
            'temporaryblock' => 'required',
            'temporarystreet' => 'required',
            'temporarysubdivision' => 'required',
            'temporaryzipcode' => 'required',
        ]);

       $data = UserInformation::find(auth()->user()->id);
       $data->update([
           'user_id' => auth()->user()->id,
        'firstname' => $this->firstname,
        'middlename' => $this->middlename,
        'lastname' => $this->surname,
        'extension' => $this->extension,
        'birthdate' => $this->birthdate,
        'place_of_birth' => $this->birthplace,
        'sex' => $this->sex,
        'civil_Status' => $this->status,
        'civil_Status' => $this->status,
        'citizenship' => $this->citizenship,
        'height' => $this->height,
        'weight' => $this->weight,
        'weight' => $this->weight,
        'blood_type' => $this->bloodtype,
        'gsis_no' => $this->gsis,
        'pagibig_no' => $this->pagibig,
        'philhealth_no' => $this->philhealth,
        'sss_no' => $this->sss,
        'tin_no' => $this->tin,
        'agency_employee_no' => $this->agency,
        'telephone' => $this->telephone,
        'mobile' => $this->mobile,
        'email' => $this->email,

       ]);

       PermanentAddress::create([
        'refprovince_id' => $this->permanentprovince,
        'refcitymun_id' => $this-> permanentcityid,
        'refbrgy_id' => $this-> permanentbarangayid,
        'block' => $this->permanentblock,
        'street' => $this->permanentstreet,
        'subdivision' => $this->permanentsubdivision,
        'zipcode' => $this->permanentzipcode,
        'user_id' => auth()->user()->id,
       ]);
       TemporaryAddress::create([
        'refprovince_id' => $this->temporaryprovince,
        'refcitymun_id' => $this-> temporarycityid,
        'refbrgy_id' => $this-> temporarybarangayid,
        'block' => $this->temporaryblock,
        'street' => $this->temporarystreet,
        'subdivision' => $this->temporarysubdivision,
        'zipcode' => $this->temporaryzipcode,
        'user_id' => auth()->user()->id,
       ]);

       


       $this->alert('success', 'Successfully Saved!.');
    }
}
