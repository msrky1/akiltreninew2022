<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\App\Models\Blog;

class SearchComponent extends Component
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $posts = Blog::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
       
    }
    public function render()
    {
        return view('livewire.project.search-component')->layout('layouts.base');
    }
}
