<div>
    <h3>Messages Component</h3>
    <form wire:submit="saveMessage">
        @if (session()->has('feedback'))
            <div>
                {{ session('feedback') }}
            </div>
            <br>
        @endif
        <input type="text" placeholder="Message Title" wire:model="title">
        @error('title')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <br>
        <textarea wire:model="body" placeholder="Write your message..."></textarea>
        @error('body')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <br>
        <button type="submit">Save Message</button>
    </form>

    <div>
        <h3>User Messages inside Messages Component</h3>

        @forelse($messages as $message)
            <div style="border: 1px solid black; width: max-content; margin-bottom: 5px;">
                <h4>Title: {{ $message->title }}</h4>
                <p>Body: {{ $message->body }}</p>
                <small>
                    Last Updated: {{ $message->updated_at->diffForHumans() }}
                </small>
                <a href="{{ route('edit-message', $message->id) }}">
                    <button>Edit Message</button>
                </a>
                <button wire:click="deleteMessage({{ $message->id }})">Delete Message</button>
            </div>
        @empty
            <p>No messages found for this logged in user.</p>
        @endforelse
    </div>
</div>
