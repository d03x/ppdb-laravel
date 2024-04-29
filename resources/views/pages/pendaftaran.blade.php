<x-app-layout title="Pendaftaran">
    <div class="bg-card p-4 rounded-lg shadow">
        @if ($current_user->formulir)
            @if (App\StatusFormulir::SUBMITTED === $status_formulir)
                @include('pages.partials.pendaftaran.submitted-form')
            @elseif (App\StatusFormulir::APPROVED === $status_formulir && App\StatusAkhirPendaftaran::PENDING === $status_akhir)
                @include('pages.partials.pendaftaran.approved-form')
            @elseif (App\StatusFormulir::APPROVED === $status_formulir && App\StatusAkhirPendaftaran::PENDING !== $status_akhir)
                @include('pages.partials.pendaftaran.status_akhir')
            @elseif (App\StatusFormulir::PENDING === $status_formulir && App\StatusAkhirPendaftaran::PENDING === $status_akhir)
            @include('pages.partials.pendaftaran.detail_pendaftaran')
            @endif
            @else 
            @include('pages.partials.pendaftaran.buat')
        @endif
    </div>
</x-app-layout>
