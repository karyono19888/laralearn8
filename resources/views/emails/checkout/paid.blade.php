@component('mail::message')
# Your Transactions has been confirmed

Hi, {{ $checkout->User->name }}
<br>
Your Transaction has been confirmed, now you can enjoy the benefit of <b>{{ $checkout->Camp->title }}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
