<x-mail::message>
# Introduction

Welcome {{$user}}!  Thank you for registrating.

<x-mail::button :url="''">
More information
</x-mail::button>

Our Team,<br>
{{ config('app.name') }}
</x-mail::message>
