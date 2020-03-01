@component('mail::message')
# Introduction

Thank you, for running Raisul's project.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent