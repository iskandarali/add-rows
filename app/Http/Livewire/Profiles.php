<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profiles extends Component
{
    public $headers = [];

    public function render()
    {
        return view('livewire.profiles');
    }
}
