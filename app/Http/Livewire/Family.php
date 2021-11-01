<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FamilyMember;

class Family extends Component
{
    public $spousesurname;
    public $spouseextension;
    public $spousefirstname;
    public $spousemiddlename;
    public $occupation;
    public $employer;
    public $business;
    public $telephone;

    public $childs = [[
        'firstname' => "",
        'middlename' => "",
        'surname' => "",
        'birthdate' => "",
    ],];

    public $fathersurname;
    public $fatherextension;
    public $fatherfirstname;
    public $fathermiddlename;
    public $mothersurname;
    public $mothermaiden;
    public $motherfirstname;
    public $mothermiddlename;

    public function render()
    {
        return view('livewire.pds.stepper.family');
    }

    public function addchilds(){
          array_push($this->childs, "");
    }

    public function save(){
        FamilyMember::create([
            //spouse
            'user_id' => auth()->user()->id,
            'surname' => $this->spousesurname,
            'firstname' => $this->spousefirstname,
            'middlename' => $this->spousemiddlename,
            'extension' => $this->spouseextension,
            'occupation' => $this->occupation,
            'business_name' => $this->employer,
            'business_address' => $this->business,
            'telephone' => $this->telephone, 
              'relationship' => "spouse",
        ]);

        FamilyMember::create([
            //father
            'user_id' => auth()->user()->id,
            'surname' => $this->fathersurname,
            'firstname' => $this->fatherfirstname,
            'middlename' => $this->fathermiddlename,
            'extension' => $this->fatherextension,
              'relationship' => "father",
        ]);
        FamilyMember::create([
            //mother
            'user_id' => auth()->user()->id,
            'surname' => $this->mothersurname,
            'firstname' => $this->motherfirstname,
            'middlename' => $this->mothermiddlename,
            'maiden' => $this->mothermaiden,
              'relationship' => "mother",
        ]);

        //childs
        foreach ($this->childs as $key => $item) {
        FamilyMember::create([
        'user_id' => auth()->user()->id,
        'surname' => $this->childs[$key]['surname'],
        'firstname' => $this->childs[$key]['firstname'],
        'middlename' => $this->childs[$key]['middlename'],
        'birthdate' => $this->childs[$key]['birthdate'],
        'relationship' => "children",
        ]);
        }
        $this->alert('success', 'Successfully Saved!');
    }
}
