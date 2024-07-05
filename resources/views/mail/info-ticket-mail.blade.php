<x-mail::message>

The ticket was created by {{$name}}!

# {{$title}}

{{$desc}}

<x-mail::button :url="''">
More info
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
