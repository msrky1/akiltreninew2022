<?php

namespace App\Http\Livewire\Project\Class;

use Livewire\Component;
use App\Models\Classroom;


class ClassDetailComponent extends Component
{ 

    public $classroom_id;

    public function mount($classroom_id) {
      
        
         $this->$classroom_id = $classroom_id;

    }
    public function render()
    {
        $class = Classroom::where('classroom_id' , $this->classroom_id)->first();
        return view('livewire.project.class.class-detail-component', ['class' => $class])->layout('layouts.base');
    }
}
