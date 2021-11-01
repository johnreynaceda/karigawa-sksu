<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Pds extends Component
{
    public $steps = 'personal';

   public function updatedSteps(){
       session()->put('steps', $this->steps);
   }
    public function render()
    {
        $this->steps = session('steps');
        return view('livewire.pds.pds');
    }
    
}
