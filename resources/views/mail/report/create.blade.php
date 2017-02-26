@component('mail::message')
# Report Submitted

You have just claim the report on this website.

@component('mail::button', ['url' => ''])
Reporio
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
