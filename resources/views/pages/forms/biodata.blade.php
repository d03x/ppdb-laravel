<x-app-layout>
    @php
        $golongan_darah = [
            'A' => 'A',
            'O' => 'O',
            'AB' => 'AB',
            'B' => 'B',
        ];
    @endphp
    <x-form-card title="ISI BIODATA" description="lorem ipu">
        <form action="">
            <div class="grid gap-3 grid-cols-1">
                <div class="">
                    <x-label for="nik">NIK</x-label>
                    <x-input name='nik' placeholder="Ketikan nik (NO INDUK KEPENDUDUKAN)" />
                </div>
                <div class="">
                    <x-label for="nisn">NISN</x-label>
                    <x-input name='nisn' placeholder="Ketikan nisn (No Induk Siswa Nasional)" />
                </div>
                <div class="">
                    <x-label for="nama">Nama Lengkap</x-label>
                    <x-input name='nama' placeholder="Ketikan nama" />
                </div>
                <div class="">
                    <x-label for="nama">Nama Lengkap</x-label>
                    <x-input name='nama' placeholder="Ketikan nama" />
                </div>
                <div>
                    <x-label for="Agama">Agama</x-label>
                    <x-combobox name="ref_agama_id" :items="$agamas" value="id" label="nama" />
                </div>
                <div>
                    <x-label for="KebutuhanKhusus">Kebutuhan Khusus</x-label>
                    <x-combobox name="ref_kebutuhan_khusus_id" :items="$kebutuhan_khususes" value="id" label="nama" />
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                    <div>
                        <x-label for="tempat_lahir">Tempat Lahir</x-label>
                        <x-input placeholder="Tempat lahir" />
                    </div>
                    <div>
                        <x-label for="tanggal_lahir">Tanggal Lahir</x-label>
                        <x-input type="date" placeholder="tanggal lahir" />
                    </div>
                </div>
                <div>
                    <x-label for="GolonganDarah">Golongan Darah</x-label>
                    <x-combobox name="ref_kebutuhan_khusus_id" :items="$golongan_darah" />
                </div>
                <div>
                    <x-label for="bahasa_sehari_hari">Bahasa Sehari Hari</x-label>
                    <x-input placeholder="Bahasa Sehari Hari Anda" />
                </div>
                <div>
                    <x-label for="email">Alamat Email</x-label>
                    <x-input type="email" value="{{ $data->email ?? $current_user->email }}"
                        placeholder="Alamat Email Anda" />
                </div>

                <div>
                    <x-label for="no_telepon">No Telp Aktif</x-label>
                    <x-input type="telp" value="" placeholder="No.Telp Aktif" />
                </div>
                <div>
                    <x-label for="no_whatsapp">No Whatsapp Anda</x-label>
                    <x-input type="telp" value="" placeholder="No Whatsapp" />
                </div>
                <div>
                    <x-label for="alat_transportasi">Alat Transportasi</x-label>
                    <div class="grid grid-cols-3  sm:grid-cols-5">
                        @foreach ($alat_transportasi as $item)
                            <div class="">
                                <input name="alat_transportasi" type="radio" id="{{ $item }}">
                                <x-label value="{{ $item }}"
                                    for="{{ $item }}">{{ $item }}</x-label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <x-button class="mt-4">SIMPAN</x-button>
        </form>
    </x-form-card>
</x-app-layout>
