<x-mail::message>
Seu chamado {{$id}} foi aceito e logo receberá uma resposta.
<br><br>

Detalhes do chamado:<br>
{{$title}}<br>
{{$description}}




Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
