<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Galery;
use App\Models\Lawyer;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Question;
use App\Models\Setting;
use App\Models\About;
use App\Models\Whatdo;
use Carbon\Carbon;




class HomeComponent extends Component
{
    public function render()
    {


      Carbon::setLocale('tr');
           
        $slider = Slider::all();
        $Galery = Galery::orderBy('id' , 'DESC')->paginate('10');
        $lawyer = Lawyer::all();
        $question = Question::all();
        $contact = Contact::all();
        $setting = Setting::all();
        $blog = Blog::orderBy('id' , 'DESC')->paginate('10');
        $about = About::all();
        $whatdo = Whatdo::all();

        return view('livewire.project.home-component', 
        
         
        ['slider' => $slider ,
        
        
        'setting' => $setting, 

          'about' => $about ,

          'whatdo' => $whatdo, 

          'team' => $lawyer,
          'blog' => $blog,
           'galery' => $Galery

        
        
        ]
        
        )->layout('layouts.base');
    }
}
