<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\AwaTask as Task;
use App\Models\User;
use Livewire\WithPagination;
class AwaTask extends Component
{

    use WithPagination;
    public $schedule;
    public $day_of_awa;
    public $description;
    public $deliverables;
    public $updatetask = false;
    public $status;

    public function updatedSchedule(){
        $this->day_of_awa = Carbon::parse($this->schedule)->dayName;
    }
    public function render()
    {
        $this->status = auth()->user();
        return view('livewire.awa.awa-task',[
            'tasks' => Task::whereMonth('schedule', '=',
            Carbon::now()->month)->where('user_id',auth()->user()->id)->where('status', 0)->paginate(5),
        ]);
    }

    public function updated($propertyName)
    {
    $this->validateOnly($propertyName,[
    'schedule' => 'required',
    'day_of_awa' => 'required',
    'description' => 'required',
    'deliverables' => 'required',
    ]);
    }

    public function save(){
         $this->validate([
         'schedule' => 'required',
         'day_of_awa' => 'required',
         'description' => 'required',
         'deliverables' => 'required',
         ]);
        Task::create([
            'schedule' => $this->schedule,
            'task_description' => $this->description,
            'deliverables' => $this->deliverables,
            'user_id' => auth()->user()->id,
        ]);

        $this->schedule = null;
        $this->day_of_awa = "";
        $this->description = "";
        $this->deliverables = "";
        $this->alert('success', 'AWA Task Saved Successfully!');
    }

    public function delete($id){
        Task::find($id)->delete();
    }

    public function edit($id){
        $this->updatetask = true;
      $data = Task::find($id);
      $this->schedule = $data->schedule;
      $this->day_of_awa = Carbon::parse($this->schedule)->dayName;
      $this->description = $data->task_description;
      $this->deliverables = $data->deliverables; 
    }

    public function submit(){
     
        auth()->user()->update([
            'awaStatus' => '1',
        ]);
         $data = Task::whereMonth('schedule', '=', Carbon::now()->month)->where('user_id',auth()->user()->id)->get();
         
        

            foreach ($data as $task) {
            $task->update([
            'status' => 1,
            ]);
            }
            $this->alert('success', 'AWA Task Submitted Successfully!');
    }
}
