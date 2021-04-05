<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $email;
    public $phone;

    public function create()
    {
        dd($this->name, $this->email, $this->phone);
    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
