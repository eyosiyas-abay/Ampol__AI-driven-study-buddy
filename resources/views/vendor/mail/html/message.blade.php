<x-mail::layout>
    <x-slot:header>
        <x-mail::header />
    </x-slot:header>

    {{ $slot }}

    <x-slot:footer>
        <x-mail::footer />
    </x-slot:footer>
</x-mail::layout>
