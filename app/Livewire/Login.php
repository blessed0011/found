<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email_address;
    public $password;

    public function loginUser()
    {
        $credentials = $this->validate([
            "email_address" => "required|email",
            "password" => "required|min:8"
        ]);

        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended('/dashboard');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
