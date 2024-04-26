@props(['title'=>null])
<x-base-layout :title="$title">
    <x-slot name='head'>
        {!! $head ?? null !!}
    </x-slot>
    {{ $slot }}
    <x-slot name='footers'>
        {!! $footers ?? null !!}
    </x-slot>
</x-base-layout>