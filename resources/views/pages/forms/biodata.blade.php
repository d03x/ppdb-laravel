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
        <form action="{{ route('dashboard.pendaftaran.forms.biodata.simpan') }}" method="POST">
            @csrf
            @method('POST')
            <div class="grid gap-3 grid-cols-1">
               <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                <div class="">
                    <x-label for="nik">NIK</x-label>
                    <x-input value="{{old('nik',$data['nik'])}}" name='nik' placeholder="Ketikan nik (NO INDUK KEPENDUDUKAN)" />
                    <x-input-error :messages="$errors->get('nik')"/>
                </div>
                <div class="">
                    <x-label for="nisn">NISN</x-label>
                    <x-input value="{{old('nisn',$data['nisn'])}}" name='nisn' placeholder="Ketikan nisn (No Induk Siswa Nasional)" />
                    <x-input-error :messages="$errors->get('nisn')"/>
                </div>
               </div>
               
                <div class="">
                    <x-label for="nama">Nama Lengkap</x-label>
                    <x-input value="{{old('nama',$data['nama'])}}" name='nama' placeholder="Ketikan nama" />
                    <x-input-error :messages="$errors->get('nama')"/>
                </div>
                <div>
                    <x-label for="Agama">Agama</x-label>
                    <x-combobox selected="{{old('ref_agama_id',$data['ref_agama_id'])}}" name="ref_agama_id" :items="$agamas" value="id" label="nama" />
                    <x-input-error :messages="$errors->get('ref_agama_id')"/>
                </div>
                <div>
                    <x-label for="KebutuhanKhusus">Kebutuhan Khusus</x-label>
                    <x-combobox selected="{{old('ref_kebutuhan_khusus_id',$data['ref_kebutuhan_khusus_id'])}}" name="ref_kebutuhan_khusus_id" :items="$kebutuhan_khususes" value="id" label="nama" />
                    <x-input-error :messages="$errors->get('ref_kebutuhan_khusus_id')"/>

               
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                    <div>
                        <x-label for="tempat_lahir">Tempat Lahir</x-label>
                        <x-input value="{{old('tempat_lahir',$data['tempat_lahir'])}}" name="tempat_lahir" placeholder="Tempat lahir" />
                        <x-input-error :messages="$errors->get('tempat_lahir')"/>
                    </div>
                    <div>
                        <x-label for="tanggal_lahir">Tanggal Lahir</x-label>
                        <x-input value="{{old('tanggal_lahir',$data['tanggal_lahir'])}}" type="date" name="tanggal_lahir" placeholder="tanggal lahir" />
                        <x-input-error :messages="$errors->get('tanggal_lahir')"/>
                    </div>
                </div>
                <div>
                    <x-label for="GolonganDarah">Golongan Darah</x-label>
                    <x-combobox selected="{{old('golongan_darah',$data['golongan_darah'])}}" name="golongan_darah" :items="$golongan_darah" />
                    <x-input-error :messages="$errors->get('golongan_darah')"/>

                </div>
                <div>
                    <x-label for='tempat_tinggal'>Tinggal Dengan</x-label>
                    <x-combobox selected="{{old('tinggal_dengan',$data['tinggal_dengan'])}}" name="tinggal_dengan" :items="$tempat_tinggals" />
                    <x-input-error :messages="$errors->get('tinggal_dengan')"/>
                </div>
                <div>
                    <x-label for="bahasa_sehari_hari">Bahasa Sehari Hari</x-label>
                    <x-input selected="{{old('bahasa_sehari_hari',$data['bahasa_sehari_hari'])}}" name="bahasa_sehari_hari" placeholder="Bahasa Sehari Hari Anda" />
                    <x-input-error :messages="$errors->get('bahasa_sehari_hari')"/>
                </div>
                <div>
                    <x-label for="email">Alamat Email</x-label>
                    <x-input type="email" name="email" value="{{old('email',$data['email'] ?? $current_user->email)}}"
                        placeholder="Alamat Email Anda" />
                        <x-input-error :messages="$errors->get('email')"/>
                </div>

                <div>
                    <x-label for="no_telepon">No Telp Aktif</x-label>
                    <x-input type="telp" name="no_telepon_aktif" value="{{old('no_telepon_aktif',$data['no_telepon_aktif'])}}" placeholder="No.Telp Aktif" />
                    <x-input-error :messages="$errors->get('no_telepon_aktif')"/>
                </div>
                <div>
                    <x-label for="no_whatsapp">No Whatsapp Anda</x-label>
                    <x-input type="telp" name="no_wa" value="{{old('no_wa',$data['no_wa'])}}" placeholder="No Whatsapp" />
                    <x-input-error :messages="$errors->get('no_wa')"/>
                </div>
                <div>
                    <x-label for="alat_transportasi">Alat Transportasi</x-label>
                    <div class="grid grid-cols-3  sm:grid-cols-5">
                        @foreach ($alat_transportasi as $item)
                            <div class="">
                                <input  
                                value="{{ $item }}"
                                {{ $item == old('alat_transportasi',$data['alat_transportasi']) ? 'checked' : '' }}
                                name="alat_transportasi" type="radio" id="{{ $item }}">
                                <x-label 
                                    for="{{ $item }}">{{ $item }}</x-label>
                            </div>
                        @endforeach
                        {{ old('alat_transportasi') }}
                    </div>
                    <x-input-error :messages="$errors->get('alat_transportasi')"/>
                </div>
            </div>
            <x-button class="mt-4">SIMPAN</x-button>
        </form>
    </x-form-card>
</x-app-layout>
