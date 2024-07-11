<x-mail::message>
Your ticket {{$id}} was accepted and soon will get a reply.
<br><br>

Ticket details:<br>
{{$title}}<br>
{{$description}}


<x-mail::button :url="''">
More info
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
