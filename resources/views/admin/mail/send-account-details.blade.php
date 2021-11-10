@component('mail::message')
Hello <b>{{ $User->name }}</b>,

Congratulations! Your account has been created.

Your account password is <b>{{ $Password }}</b>

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thank you,<br>
{{ config('app.name') }}
@endcomponent
