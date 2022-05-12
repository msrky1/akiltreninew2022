<?php

namespace App\Http\Livewire\Admin\Classroom;

use Livewire\Component;
use App\Models\Classroom;

class AdminClassRoomEditComponent extends Component
{ 

    public $classroom;
    public $classroom_id;
    public $class_id;



    public function mount($class_id) {


                 $class = Classroom::where('id', $class_id)->first();

               $this->classroom = $class->classroom;
               $this->classroom_id = $class->classroom_id;
               $this->class_id = $class->id;


    }

    public function updateClass() {

        
        $class = Classroom::find($this->class_id);   
        $class->classroom = $this->classroom;
        $class->classroom_id = $this->classroom_id;
        $class->save();

        session()->flash('message' , 'Güncelleme Başarılı');



    }
    public function render()
    {
        return view('livewire.admin.classroom.admin-class-room-edit-component')->layout('layouts.admin');
    }
}
