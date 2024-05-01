<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    Anda sudah mendapatkan akses form pendaftaran, silahkan melakukan pendaftaran dengan mengikuti langkah langkah
    dibawah ini!
</div>
<div class="grid grid-cols-1 sm:grid-cols-2  gap-3">
    <div class="">
        <h1 class="my-3 font-semibold text-muted-foreground uppercase">Panduan Pendaftaran</h1>
        <div class=" bg-destructive-foreground  px-9 py-8 rounded shadow-card-foreground space-y-3">
          @include('pages.partials.pendaftaran.partials.panduan_pendaftaran')
        </div>
    </div>
    <div class="">
        <h1 class="my-3 font-semibold text-muted-foreground uppercase">Progress Pendaftaran Anda</h1>
        <div class=" bg-destructive-foreground rounded-lg p-4 space-y-2">
            @foreach ($progress as $key => $item)
                <div class="flex justify-between mb-1">
                    <span
                        class="text-base font-medium {{ $item <= 30 ? 'text-red-600' : ($item <= 50 ? 'text-blue-500' : 'text-green-500') }} dark:text-white">{{ strtoupper($key) }}</span>
                    <span
                        class="text-sm font-medium {{ $item <= 30 ? 'text-red-600' : ($item <= 50 ? 'text-blue-500' : 'text-green-500') }} dark:text-white">{{ $item }}%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-sm h-1.5 dark:bg-gray-700">
                    <div class="{{ $item <= 30 ? 'bg-red-600' : ($item <= 50 ? 'bg-blue-500' : 'bg-green-500') }} h-1.5 rounded-full"
                        style="width: {{ $item }}%"></div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<div class="mt-3">
    @if ($current_user->formulir->is_lock)
        <span class="p-2 rounded-full border flex items-center gap-2 bg-muted justify-center">
            <i class="pi pi-lock"></i>
            <span>Sudah dikunci/finalisasi</span>
        </span>
    @else
        <div class="text-secondary-foreground text-sm italic mb-3 mt-4 text-orange-500">
            <i class="pi pi-exclamation-circle"></i>
            <span>
                Dengan klik finalisasi, Data anda tidak bisa di ubah lagi. Pastikan formulir lengkap dengan data sebenar
                benar nya! Kami tidak bertanggung jawab atas kesalahan data anda
            </span>
        </div>
        <x-button class="space-x-2"><span>Finalisasi</span> <i class="pi pi-lock"></i></x-button>
    @endif
</div>
