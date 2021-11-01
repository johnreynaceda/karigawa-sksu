<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Designation;
use Livewire\WithPagination;
use App\Models\Campus;
use App\Models\Department;
use App\Models\Program;

class HrMonitor extends Component
{
    use WithPagination;
    public $filter;
    public $search="";
    public $age;
    public $campuses;
    public $campusid;
    public $departments = [];
    public $programs = [];
    public $departmentid;
    public $programid;
    public $gender;

    public function updatedFilter(){
    $this->campusid = "";
    $this->departmentid = "";
    $this->programid = "";
    $this->age = "";
    $this->gender = "";

     }

    public function updatedCampusid(){
        $this->departments = Department::where('campus_id',$this->campusid)->get();
    }
    public function updatedDepartmentid(){
        $this->programs = Program::where('department_id', $this->departmentid)->get();
    }

    public function render()
    {
        $this->campuses = Campus::get();
        return view('livewire.hr.hr-monitor',[
            'datas' => (($this->filter == 'Age') ? Designation::where('designation_type_id',5)->where('campus_id',
             'like','%'.$this->campusid.'%')->where('department_id','like',
            '%'.$this->departmentid.'%')->whereHas('user',
             function($u){
             $u->where('name', 'like', '%'.$this->search.'%')->whereHas('userinformation',function($k){
             $k->where('age','like', '%'. $this->age.'%');
             });
             })->paginate(5) : (($this->filter == 'Course') ?
             Designation::where('designation_type_id',5)->where('campus_id',
              'like','%'.$this->campusid.'%')->where('department_id','like',
             '%'.$this->departmentid.'%')->where('program_id','like','%'.$this->programid. '%')->whereHas('user',
             function($u){
             $u->where('name', 'like', '%'.$this->search.'%');
             })->paginate(5) : (($this->filter == 'Gender') ?
             Designation::where('designation_type_id',5)->where('campus_id',
             'like','%'.$this->campusid.'%')->where('department_id','like',
             '%'.$this->departmentid.'%')->where('program_id','like','%'.$this->programid. '%')->whereHas('user',
             function($u){
             $u->where('name', 'like', '%'.$this->search.'%');
             })->paginate(5) : (($this->filter == 'Blood Type') ?
             Designation::where('designation_type_id',5)->where('campus_id',
             'like','%'.$this->campusid.'%')->where('department_id','like',
             '%'.$this->departmentid.'%')->where('program_id','like','%'.$this->programid. '%')->whereHas('user',
             function($u){
             $u->where('name', 'like', '%'.$this->search.'%');
             })->paginate(5) : []) ) )),
        ]);

}
}
    //   // ,[
    //   // 'datas' => ( $this->filter == "Age") ?
    //   // Designation::where('designation_type_id',5)->where('campus_id',
    //   // 'like','%'.$this->campusid.'%')->where('department_id','like',
    //   '%'.$this->departmentid.'%')->whereHas('user',
    //   // function($u){
    //   // $u->where('name', 'like', '%'.$this->search.'%')->whereHas('userinformation',function($k){
    //   // $k->where('age','like', '%'. $this->age.'%');
    //   // });
    //   // })->paginate(5) : (($this->filter == 'Course') ?
    //   // Designation::where('designation_type_id',5)->where('campus_id',
    //   // 'like','%'.$this->campusid.'%')->where('department_id','like',
    //   // '%'.$this->departmentid.'%')->where('program_id','like','%'.$this->programid. '%')->whereHas('user',
    //   function($u){
    //   // $u->where('name', 'like', '%'.$this->search.'%');
    //   // })->paginate(5) : []),


    //   // ]
