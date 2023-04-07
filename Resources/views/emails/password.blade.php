@component('mail::message')
<h2>Dear {{$user->name}}</h2>

<p>Please be notified that you have updated your Staff Account Password.</p>

<p>Please keep your login details safe.</p>

<p>If you did not change your password, please inform the system administrator now.</p>

<p>Visit <a href="{{route('login')}}">{{ config('app.name') }} Website</a> to login to your Staff Account.</p>

{{ config('app.name') }}
@endcomponent
