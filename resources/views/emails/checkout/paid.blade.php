@component('mail::message')
    # Transaction Has been confirmed.

    Hi, {{ $checkout->User->name }}
    <br />
    Your transaction has been confirmed, you can enjoy benefit of {{ $checkout->Camp->title }} camp.

    @component('mail::button', ['url' => route('user.dashboard')])
        My Dashboard
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
