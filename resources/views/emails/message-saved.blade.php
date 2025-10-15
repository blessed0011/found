<x-mail::message>
    # Hey {{ $data->user->fullname }},

    Your message has been saved successfully!

    ---

    **Title:**
    {{ $data->title }}

    **Body:**
    {{ $data->body }}

    ---

    <x-mail::button :url="route('dashboard')">
        View Your Messages
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>