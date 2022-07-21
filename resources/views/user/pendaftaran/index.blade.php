<x-user-layout>
    <x-slot name="header">Pendaftaran</x-slot>
    @if ($nilai)
        Anda sudah mengisi form
    @else
        @include('user.pendaftaran.create')
    @endif
</x-user-layout>
