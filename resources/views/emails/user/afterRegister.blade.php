@component('mail::message')

Hi {{ $user->name }}

<br>
Welcome to BWA Laracamp. Your account has been created successfuly.
Now you can choose your best match camp!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
