<x-mail::message>

You created a ticket and it is waiting for approval<br>

# {{$title}}

{{$desc}}

<br>
Soon you will have a reply from our supports. 
<br>

<x-mail::button :url="''">
More info
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
