@props(['title'=>null])
<x-base-layout :title="$title">
    <x-slot name='head'>
        {!! $head ?? null !!}
    </x-slot>
    @isset($slot)
        {{$slot}}
    @endisset
    <x-slot name='footers'>
        {!! $footers ?? null !!}
    </x-slot>
</x-base-layout>