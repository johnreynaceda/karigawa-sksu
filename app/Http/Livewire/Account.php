<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Account extends Component
{
    public function render()
    {
        return view('livewire.account');
    }

    public function designation($id){
        // dd($id);
    switch ($id) {
        case 6:
            session()->put('role', '6');
            return redirect()->route('hr-dashboard');
            break;
        case 5:
            session()->put('role', '5');
            return redirect()->route('faculty-dashboard');
            break;
        case 4:
            session()->put('role', '4');
            return redirect()->route('programhead-dashboard');
            break;
        case 3:
            session()->put('role', '3');
            return redirect()->route('faculty-dashboard');
            break;
        case 2:
            session()->put('role', '2');
            return redirect()->route('faculty-dashboard');
            break;
        case 1:
            session()->put('role', '1');
            return redirect()->route('faculty-dashboard');
            break;

        default:
        
            break;
    }
    }
}
