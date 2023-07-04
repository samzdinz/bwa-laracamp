@component('mail::message')
    # Register Camp: {{ $checkout->Camp->title }}

    Hi {{ $checkout->user->name }}
    Thank You for Register on <b>{{ $checkout->Camp->title }}</b>, please see payment instruction by click teh button below.

    @component('mail::button', ['url' => route('dashboard')])
        Get Invoice
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
