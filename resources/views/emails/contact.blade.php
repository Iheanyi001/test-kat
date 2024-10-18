<x-mail::message>
# {{$data['subject']}}

Name : {{ $data['name'] }}

Email : {{ $data['email'] }}
<x-mail::panel>
{{ $data['message'] }}
</x-mail::panel>

</x-mail::message>
