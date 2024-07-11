<x-mail::message>
Your ticket {{$id}} has received a reply from the support team
<br><br>
"{{$reply}}"

<x-mail::button :url="''">
Access
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
