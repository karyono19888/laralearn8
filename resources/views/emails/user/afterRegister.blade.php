@component('mail::message')
# Welocome to Laracamp

Hi, {{ $user->name }}
<br>
Congratulation! Your account gas been created successfully. Now you can choose you best match camp.

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
