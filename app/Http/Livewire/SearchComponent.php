<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Approved;
use Barryvdh\DomPDF\Facade\Pdf;

class SearchComponent extends Component
{
    public $query;
    public $approved;



    public function mount(){


        $this->query = '';
        $this->approved = [];
    }



    public function updatedQuery(){


         $this->approved = Approved::where('tc' , 'like' , '%' . $this->query . '%')
         
         ->get()

         ->toArray();

    }

    public function pdfReturn () {

          return redirect()->back();

    }
    public function render()
    {
        return view('livewire.search-component')->layout('layouts.base-w');
    }
}
