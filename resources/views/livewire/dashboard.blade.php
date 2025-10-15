<div>
    <h3>Dashboard Component</h3>

    <p>Welcome {{ $user->fullname }}</p>

    {{-- Profile Component Import --}}
    @livewire('profile')

    {{-- Messages Component Import --}}
    @livewire('messages')

    <br>
    {{-- Logout Component Import --}}
    @livewire('logout')
</div>