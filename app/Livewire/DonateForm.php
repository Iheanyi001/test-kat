<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Donation;
use App\Models\Donator;

class DonateForm extends Component
{

    public $donation_amount;
    public $recurring_donation = 'one-time';
    public $donation_campaign;
    public $donation_message;
    public $anonymous_donation = false;

    public $donator_firstname;
    public $donator_lastname;
    public $donator_email;
    public $donator_address;
    public $donator_zip;

    protected $rules = [
        'donation_amount' => 'required|numeric|min:1',
        'recurring_donation' => 'required',
        'donator_firstname' => 'required',
        'donator_lastname' => 'required',
        'donator_email' => 'required|email',
    ];

    public function submitDonation()
    {
        $this->validate();

        $donator = Donator::create([
            'firstname' => $this->donator_firstname,
            'lastname' => $this->donator_lastname,
            'email' => $this->donator_email,
            'address' => $this->donator_address,
            'zip' => $this->donator_zip,
        ]);

        Donation::create([
            'donation_amount' => $this->donation_amount,
            'recurring_donation' => $this->recurring_donation,
            'donation_campaign' => $this->donation_campaign,
            'donation_message' => $this->donation_message,
            'anonymous_donation' => $this->anonymous_donation,
            'donator_id' => $donator->id
        ]);

        session()->flash('message', 'Donation submitted successfully.');
    }

    public function render()
    {
        return view('livewire.donate-form');
    }
}
