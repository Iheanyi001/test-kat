<x-mail::message>
# {{$data['subject']}}


name : {{ $data['name'] }}

email : {{ $data['email'] }}
<x-mail::panel>
{{ $data['message'] }}
</x-mail::panel>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
