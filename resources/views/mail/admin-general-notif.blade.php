@component('mail::message')
Hello {{ $Admin->name }},

{{ $Message }}

@component('mail::button', ['url' => url($Url)])
View Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
