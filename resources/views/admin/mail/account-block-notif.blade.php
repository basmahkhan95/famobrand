@component('mail::message')
Hello <b>{{ $User->name }},</b>

Your account has been blocked. Please contact support.

Thank you,<br>
<b>{{ config('app.name') }}</b>
@endcomponent
