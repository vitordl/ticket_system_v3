<x-mail::message>
# Ticket was created

The user {{$name}} created a new ticket

# Ticket {{$title}}
{{$desc}}

<x-mail::button :url="''">
Access
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
