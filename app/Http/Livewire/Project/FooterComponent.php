<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\About;
use App\Models\Whatdo;
use App\Models\Setting;
use App\Models\Galery;

class FooterComponent extends Component
{
    public function render()
    {


        $galery = Galery::orderBy('id' , 'DESC')->paginate('6');
      
     
        $whatdo = Whatdo::orderBy('id', 'DESC')->paginate('6');
        $setting = Setting::all();
  
        $about = About::all();
     

        return view('livewire.project.footer-component', [



            'setting' => $setting, 

            'about' => $about ,
  
            'whatdo' => $whatdo, 
  
             'galery' => $galery
      
        ]);
    }
}
