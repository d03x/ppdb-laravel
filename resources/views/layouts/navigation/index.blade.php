<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <x-nav-link href="{{ route('dashboard') }}" icon="pi pi-home">Dashboard</x-nav-link>
            <x-nav-link icon="pi pi-user">Akun</x-nav-link>
            <x-nav-link href="{{ route('dashboard.pendaftaran') }}" icon="pi pi-file-edit">Pendaftaran</x-nav-link>
            @if (isset($current_user) && $current_user->formulir)
            <x-menu-dropdown name="Pendaftaran" icon="pi pi-file">
                <x-slot name='dropdown_item'>
                    <x-menu-dropdown-item href="{{ route('dashboard.pendaftaran.forms.biodata') }}">Biodata</x-menu-dropdown-item>
                    <x-menu-dropdown-item>Alamat</x-menu-dropdown-item>
                    <x-menu-dropdown-item>Orang Tua</x-menu-dropdown-item>
                </x-slot>
            </x-menu-dropdown>
            @endif
        </ul>
    </div>
</aside>
