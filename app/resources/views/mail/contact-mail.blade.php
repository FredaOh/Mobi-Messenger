<x-mail::message>
Mobi Messenger Customer From Contact Sales

Name: {{ $name }}
Email: {{ $email }}
Message: {{ $message }}
{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
