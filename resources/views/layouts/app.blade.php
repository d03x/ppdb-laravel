@props(['title' => null])
<x-base-layout :title="$title">
    <x-slot name='head'>
        {!! $head ?? null !!}
    </x-slot>
    <!-- header -->
    <div class="mx-auto w-full">
        @include('layouts.navigation.navbar')
        @include('layouts.navigation.index')
        <div class="p-4 sm:ml-64">
            <div class="sm:p-4  border-gray-200   dark:border-gray-700 mt-16 sm:mt-14">
                {{ $slot }}
            </div>
        </div>
    </div>

    <x-slot name='footers'>
        {!! $footers ?? null !!}
    </x-slot>
</x-base-layout>
