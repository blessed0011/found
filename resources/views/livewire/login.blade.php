<div>
    <form wire:submit="loginUser">
        <input type="email" wire:model="email_address" placeholder="e.g. user@example.com" id="email_address">
        <input type="password" wire:model="password" placeholder="********" id="password">
        <button type="submit">Login</button>
    </form>
</div>