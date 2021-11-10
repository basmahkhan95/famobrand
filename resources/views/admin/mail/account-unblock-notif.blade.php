@component('mail::message')
Hello <b>{{ $User->name }},</b>

Congratulations! Your account has been unblocked.

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thank you,<br>
<b>{{ config('app.name') }}</b>
@endcomponent
