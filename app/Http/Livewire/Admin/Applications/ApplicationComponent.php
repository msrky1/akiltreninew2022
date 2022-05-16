<?php

namespace App\Http\Livewire\Admin\Applications;

use Livewire\Component;
use App\Models\Application;
use App\Models\Approved;
use  Illuminate\Support\Facades\DB;

class ApplicationComponent extends Component
{
    public $name; 
    public $email;
    public $tc;

  

    


    public function tableReset() {
    
        DB::table('approveds')->truncate();
        DB::table('applications')->truncate();


  }
  

    public function render()
    {


        $app = Application::all();
        return view('livewire.admin.applications.application-component', ['app' => $app])->layout('layouts.admin');
    }
}
