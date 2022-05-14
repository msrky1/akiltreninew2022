<?php

namespace App\Http\Livewire\Admin\Applications;

use Livewire\Component;
use App\Models\Application;

class ApplicationComponent extends Component
{

    public function render()
    {

        $app = Application::all();
        return view('livewire.admin.applications.application-component', ['app' => $app])->layout('layouts.admin');
    }
}
