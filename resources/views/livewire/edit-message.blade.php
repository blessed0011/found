<div>
    <h3>Edit Message Component</h3>
    <form wire:submit="updateMessageData">
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
        <button type="submit">Update Data</button>
    </form>
    <br>
    <a href="{{ route('dashboard') }}">Cancel</a>
    <br>
</div>
