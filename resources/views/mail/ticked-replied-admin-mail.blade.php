<x-mail::message>
The ticket {{$id}} has received a reply from the user.
<br><br>
"{{$reply}}"

<x-mail::button :url="''">
Access
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
