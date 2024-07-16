<x-mail::message>
# Chamado foi criado

Usuário {{$name}} criou um novo chamado

# Chamado:  {{$title}}
{{$desc}}


Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
