<div>
    <form wire:submit="registerUser">
        <input type="text" wire:model="fullname" placeholder="e.g. John Doe" id="fullname">
        <input type="email" wire:model="email_address" placeholder="e.g. user@example.com" id="email_address">
        <input type="password" wire:model="password" placeholder="********" id="password">
        <button type="submit">Register</button>
    </form>
</div>