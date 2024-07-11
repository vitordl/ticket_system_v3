<x-mail::message>
Sorry, your ticket {{$id}} has been declined. This issue is outside the scope of our support team.
<br><br>
Ticket details: <br>
{{$title}}<br>
{{$description}}


<x-mail::button :url="''">
More info
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
