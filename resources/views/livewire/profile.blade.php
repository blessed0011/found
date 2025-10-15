<div>
    <h3>Blessed Experience Dashboard</h3>
    <form wire:submit="updateCredentials">
        @if (session()->has('feedback'))
            <div>
                {{ session('feedback') }}
            </div>
            <br>
        @endif
        <div>
            <input type="text" wire:model="fullname" placeholder="e.g. John Doe" id="fullname">
            @error('fullname')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="email" wire:model="email_address" placeholder="e.g. user@example.com" id="email_address">
            @error('email_address')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Update Credentials</button>
    </form>
</div>