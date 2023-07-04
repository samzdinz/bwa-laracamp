@component('mail::message')
    # welcome

    Hi {{ $user->name }}
    <br>
    Welcome to Laracamp, your account has been successfully, now you can choose best match!

    @component('mail::button', ['url' => route('auth.user.login')])
        Login Here
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
