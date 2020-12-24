@component('mail::message')

A mail has been sent to you from {{$email->email}} By The name of {{$email->full_name}}.

Email content:

{{$email->body}}

From : {{$email->full_name}},
email: {{$email->email}},
Phone: {{$email->phone}}

<br>
{{ config('app.name') }} Administration
@endcomponent
