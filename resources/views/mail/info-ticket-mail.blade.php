<x-mail::message>

You created a ticket

# {{$title}}

{{$desc}}

Soon you will have a reply from our supports. 

<x-mail::button :url="''">
More info
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
