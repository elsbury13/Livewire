<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $body;

    // Default rules
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'body' => 'required',
    ];

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->body = null;
    }

    // validating form on the fly
    public function updated($propertyName)
    {
        // Default
        //$this->validateOnly($propertyName);

        // Overwrite rules
        $this->validateOnly($propertyName, [
            'name' => 'min:6',
            'email' => 'require|email',
            'body' => 'required',
        ]);

        // Add own validation messsages
        //$this->addError('name', 'No Name');
        //$this->addError('email', 'No Email');
    }

    public function saveContact()
    {
        // Use standard ValidationException
        //$validatedData = $this->validate();

        // Can overwrite validation rules
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        Contact::create($validatedData);

        $this->resetInput();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
