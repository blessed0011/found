<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public $user;

    public function mount()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $this->user = Auth::user();
    }

    /**
     * Refresh the component when change detected.
     */
    #[On('change-detected')]
    public function refreshApp()
    {
        // This method is intentionally empty; calling it triggers a re-render.
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
