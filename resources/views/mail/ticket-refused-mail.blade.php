<x-mail::message>
Desculpe, seu chamado {{$id}} foi recusado. Esse problema não faz parte do escopo do suporte.
<br><br>
Detalhes do chamado: <br>
{{$title}}<br>
{{$description}}




Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
