<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use Symfony\Component\Mime\Part\TextPart;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    // Define validation rules
    public function rules(){
        return [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string|max:500',
        ];
    }

    // Submit the form
    public function save()
    {
        // Validate the form
        $this->validate();

        // Store the information in the database
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        Mail::to('ukoiheanyiking@gmail.com')->send(new ContactEmail([
            'subject' => 'New contact form submission',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ]));

        // Provide feedback to the user
        session()->flash('success', 'Your message has been sent successfully.');

        // Reset form fields
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

