<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $title = 'Contact-form';
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:255',
        ]);

        Contact::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'message' => $this->message,
                ]);

        session()->flash('success', 'Contact successfully added.');
        return redirect()->back();


    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
