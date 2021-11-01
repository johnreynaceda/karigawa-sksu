<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Designation;
use App\Models\AwaTask as Task;
use App\Models\User;
use Livewire\WithPagination;

class ProgramheadApplication extends Component
{
    use WithPagination;
    public $search = "";
    public $filter;
    public $userid;
   

    public function updatedFilter(){
        session()->put('filter', $this->filter);
    }
    public function render()
    {
    
    $this->filter = session('filter'); 
        return view('livewire.programhead.programhead-application',[
            'facultys' => Designation::where('designation_type_id',5)->where('program_id',auth()->user()->designations('designation_type_id',4)->first()->program_id)->whereHas('user',function($k){
                $k->where('name', 'like', '%'.$this->search.'%')->where('awaStatus','like', '%'. session('filter'). '%');
            })->paginate(6),
            'users' => User::where('id', $this->userid)->first(),
            'status' => User::where('id', $this->userid)->first(),
        ]);
    }

    public function viewfaculty($id){
        $this->userid = $id;
    }

    public function approve(){
        dd('sdsd');
    }
    public function return(){
        dd('sdsd');
    }

    
}
