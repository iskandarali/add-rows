<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;

class HelloWorld extends Component
{
    public $profiles = [];
    public $product = [];

    public function mount(array $profiles)
    {
        $this->profiles = old('title', $profiles);

        $this->profiles = [
            ['title' => '', 'body' => '']
        ];
    }

    public function addProduct()
    {
        $this->profiles[] = ['title' => '', 'body' => ''];
    }

    public function removeProduct($index)
    {
        unset($this->profiles[$index]);
        $this->profiles = array_values($this->profiles);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
