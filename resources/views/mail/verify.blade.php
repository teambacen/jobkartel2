@component('mail::message')
# Sila Sahkan Akaun Anda

Hi, langkah seterusnya adalah mengesahkan akaun anda.

@component('mail::button', ['url' => action('Auth\RegisterController@verifyAccount', ['code' => $code])])
SahKan!
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
