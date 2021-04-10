<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
    ];

    public function create()
    {
        $this->validate();

        dd($this->name, $this->email, $this->phone);
    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
