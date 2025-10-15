<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Registration extends Component
{
    public $fullname = "";
    public $email_address = "";
    public $password = "";

    public function registerUser()
    {
        $user = User::create([
            'fullname' => $this->fullname,
            'email_address' => $this->email_address,
            'password' => $this->password
        ]);

        dd($user);
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
