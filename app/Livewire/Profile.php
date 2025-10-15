<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $fullname;
    public $email_address;

    // Load the current user's data when component mounts
    public function mount()
    {
        $user = Auth::user();

        // prefill form fields
        $this->fullname = $user->fullname;
        $this->email_address = $user->email_address;
    }

    public function updateCredentials()
    {
        $user = Auth::user();

        // Validate input
        $this->validate([
            'fullname' => 'required|string|min:3',
            'email_address' => 'required|email|unique:users,email_address,' . $user->id,
        ]);

        // Update and save
        $user->update([
            'fullname' => $this->fullname,
            'email_address' => $this->email_address,
        ]);

        session()->flash('feedback', 'Profile updated successfully!');

        $this->dispatch('change-detected');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
