<x-app-layout title="Wellcome">
    <div class="flex flex-col sm:flex-row gap-5">
        @include('pages.partials.welcome')
        <div class="sm:max-w-sm w-full">
            @include('pages.partials.home.notifikasi')
        </div>
    </div>
</x-app-layout>