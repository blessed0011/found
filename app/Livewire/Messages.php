<?php

namespace App\Livewire;

use App\Mail\MessageSavedMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Messages extends Component
{
    public $title;
    public $body;

    public function saveMessage()
    {
        $this->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:5',
        ]);

        // Create and store the new message instance
        $message = Auth::user()->messages()->create([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        // Send the email notification
        Mail::to(Auth::user()->email_address)->queue(new MessageSavedMail($message));

        // Reset input fields
        $this->reset(['title', 'body']);

        // Flash success message
        session()->flash('feedback', 'Message saved successfully!');
    }

    public function deleteMessage($messageId)
    {
        Auth::user()->messages()->findOrFail($messageId)->delete();
        session()->flash('feedback', 'Message deleted successfully!');
    }

    public function render()
    {
        return view('livewire.messages', [
            'messages' => Auth::user()->messages()->latest()->get()
        ]);
    }
}
