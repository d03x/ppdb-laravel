<h1 class="text-lg mb-3 font-bold text-secondary-foreground">Buat Formulir Pendaftaran</h1>
@php
    $jenis = [
        [
            'id' => 1,
            'nama' => "PINDAHAN"
],
[
            'id' => 2,
            'nama' => "BARU"
        ]
    ]
@endphp
<form action="" method="POST">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
        <div class="">
            <x-label>Jalur Pendaftaran</x-label>
            <x-combobox :items="$jalur" value='id' label='nama' name="jalur_pendaftaran_id" />
        </div>
        <div class="">
            <x-label>Jurusan</x-label>
            <x-combobox :items="$jurusan" value="id" label="nama" name="jurusan_id" />
        </div>
        <div class="">
            <x-label>Jenis Pendaftaran</x-label>
            <x-combobox :items="$jenis" value="nama" label='nama' name='jenis_pendaftaran' />
        </div>
    </div>
        <p class="italic text-sm my-2 text-destructive">
            Pastikan isian anda sudah benar dan tidak ada kesalahan. Karena form ini tidak bisa di edit atau di ubah
        </p>
        <div>
            <x-button variant="default">SIMPAN</x-button>
        </div>
</form>
