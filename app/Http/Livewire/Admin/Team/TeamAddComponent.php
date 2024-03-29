<?php

namespace App\Http\Livewire\Admin\Team;

use Livewire\Component;
use App\Models\Lawyer;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Notification;

class TeamAddComponent extends Component
{
 
    use WithFileUploads;
    public $name; 
    public $about;
    public $date_birth;
    public $image;
    public $pozition;


    public function addTeam() {

        $lawyer = new Lawyer();
        $lawyer->name = $this->name;
        $lawyer->about = $this->about;
        $lawyer->pozition = $this->pozition;
        $lawyer->date_birth = $this->date_birth;


        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('public/team', $imageName);
        $lawyer->image = $imageName; 
        $notification = new Notification();

        $notification->name = $this->name;
        $notification->notification = 'Ekibe Yeni bir Üye Başarıyla Eklendi!';
        $notification->color = 'success';
        $notification->save();
        $lawyer->save();
        session()->flash('message' , 'Ekibe Başarıyla Eklendi!');
         
       }
       
    public function render()
    {
         
        return view('livewire.admin.team.team-add-component')->layout('layouts.admin');
    }
}
