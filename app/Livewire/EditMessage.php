<?php

namespace App\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditMessage extends Component
{
    public $messageId;
    public $title;
    public $body;

    public function mount(Message $message)
    {
        $this->messageId = $message->id;
        $this->title = $message->title;
        $this->body = $message->body;
    }

    public function updateMessageData()
    {
        $this->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:5',
        ]);

        Auth::user()->messages()->findOrFail($this->messageId)->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        session()->flash('feedback', 'Message updated successfully!');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.edit-message');
    }
}