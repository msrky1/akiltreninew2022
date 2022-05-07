<?php

namespace App\Http\Livewire\Project\Blog;

use Livewire\Component;
use App\Models\Blog;

class BlogDetailComponent extends Component
{

    
    public $slug;


    public function mount($slug) {


        $this->$slug = $slug;
    }




    public function render()
    { 

        
        
        $blog = Blog::where('slug' , $this->slug)->first();
        return view('livewire.project.blog.blog-detail-component' , ['blog' => $blog])->layout('layouts.base');
    } 
}
