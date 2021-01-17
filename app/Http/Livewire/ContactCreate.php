<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.contact-create');
    }
}
