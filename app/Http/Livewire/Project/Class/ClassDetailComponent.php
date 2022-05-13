<?php

namespace App\Http\Livewire\Project\Class;

use Livewire\Component;
use App\Models\Classroom;


class ClassDetailComponent extends Component
{ 

    public $classroom_id;
    public $classroom;
    public $name;
    public $email;
    public $tc;

    public function mount($classroom_id) {
      
        
         $this->$classroom_id = $classroom_id;

    }

    public function addApp() {
        
        $class = new Classroom();
        $class->name = $this->name;
        $class->email = $this->email;
        $class->classroom =  $this->classroom;
        $class->classroom_id =  $this->classroom_id;
        $class->save();
        
       session()->flash('message' , 'Başvurunuz Başarıyla Alınmıştır!');


    }
    public function render()
    {
        $class = Classroom::where('classroom_id' , $this->classroom_id)->first();
        return view('livewire.project.class.class-detail-component', ['class' => $class])->layout('layouts.base-w');
    }
}
