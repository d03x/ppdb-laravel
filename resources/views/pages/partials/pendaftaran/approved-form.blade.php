<p class="text-2xl">
    Data anda sudah di finalisasi pada pendaftaran tahun ajaran ${form.wave.tahun_akademik}, silahkan melanjutkan ke tahap selanjutnya.
</p>
<div class="grid grid-cols-3 gap-2">
    <div class="col-span-3 md:col-span-1 flex justify-center">
        <img
            :src="form.foto"
            alt="Foto"
            class="w-60 h-80 rounded-lg"
        />
    </div>
    <div class="col-span-3 md:col-span-2 flex flex-col gap-4">
        <div
            class="text-lg text-gray-500 dark:text-gray-300"
        >
            No Ujian : <span>no_exam </span>
        </div>
        <div
            class="text-lg text-gray-500 dark:text-gray-300"
        >
            <div
                class="text-lg text-gray-500 dark:text-gray-300"
            >
                Nama : <span>name </span>
            </div>
            <div
                class="text-lg text-gray-500 dark:text-gray-300"
            >
                NISN : <span>education_number </span>
            </div>
        </div>
        <div
            class="text-lg text-gray-500 dark:text-gray-300"
        >
            Tempat, Tanggal Lahir :
            <span
                >birth_place_city ,
                birth_date </span
            >
        </div>
        <div
            class="text-lg text-gray-500 dark:text-gray-300"
        >
            Pilihan Program Studi :
            <span>prodi </span>
        </div>
        <div
            class="text-lg text-gray-500 dark:text-gray-300"
        >
            Gelombang :
            <span>wave.code </span>
        </div>
        <div class="mt-5">
            <x-button> Cetak Kartu Ujian </x-button>
        </div>
    </div>
</div>