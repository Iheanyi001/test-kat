<?php

namespace App\Livewire;

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

        /*Mail::mailer('support')->send([], [], function ($message) {
            $message->to('info@kingatekefoundation.org')
            ->subject('New Contact Form Submission')
            ->html(
                'Name: ' . $this->name . '<br>' .
                'Email: ' . $this->email . '<br>' .
                'Message: ' . $this->message
            );
        });*/

        Mail::mailer('support')->send([], [], function ($message) {
            $message->from('support@kingatekefoundation.org', 'Membership Request')
                    ->replyTo('ukoiheanyiking@gmail.com')
                    ->to('ukoiheanyiking@gmail.com')
                    ->subject('Membership Request')
                    ->html(
                        'Name: ' . $this->name . '<br>' .
                        'Email: ' . $this->email . '<br>' .
                        'Message: ' . $this->message
                    );
        });




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

