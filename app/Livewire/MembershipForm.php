<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Membership;
use Livewire\Attributes\Validate;

class MembershipForm extends Component
{
    #[Validate]
    public $name;
    #[Validate]
    public $email;
    #[Validate]
    public $phone;
    #[Validate]
    public $location;
    #[Validate]
    public $message;
    public function rules() {
        return [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'location' => 'required|string|max:255',
        'message' => 'required|string',
    ];
}

    public function save()
    {
        $this->validate();

        // Save contact data
        Membership::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'location' => $this->location,
            'message' => $this->message,
        ]);

        // Clear form fields
        $this->reset();

        session()->flash('success', "Thank you! We've received your message and will get back to you shortly.");
    }


    public function render()
    {
        return view('livewire.membership-form');
    }
}
