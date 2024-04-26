<?php

use App\Models\RefAgama;
use App\Models\RefKebutuhanKhusus;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId(User::class)->constrained('users');
            $table->foreignUuid('jalur_pendaftaran_id')->constrained('jalur_pendaftarans');
            $table->foreignUuid('jurusan_id')->constrained('jurusans');
            $table->string('no_pendaftaran');
            $table->year('tahun_ajaran_start');
            $table->year('tahun_ajaran_end');
            $table->enum('status_formulir', [
                'submitted',
                'pending',
                'rejected',
                'accepted',
            ])->default('pending');
            $table->enum('status_akhir', [
                'pending',
                'rejected',
                'accepted',
            ])->default('pending');
            $table->dateTime('accepted_date')->nullable();
            $table->boolean('is_lock')->default(false);
            // bidoata
            $table->string('nama');
            $table->string('nisn');
            $table->string('nik');
            $table->foreignIdFor(RefAgama::class)->nullable()->constrained('agamas');
            $table->foreignIdFor(RefKebutuhanKhusus::class)->nullable()->constrained();
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->enum('golongan_darah', [
                'A',
                'O',
                'AB',
                'B',
            ]);
            $table->string('tinggal_dengan');
            $table->string('bahasa_sehari_hari');
            $table->string('email');
            $table->char('no_telepon_aktif', 13);
            $table->char('no_wa', 13);
            $table->string('alat_transportasi');
            // alamat
            $table->string('jalan');
            $table->string('dusun');
            $table->string('kode_pos');
            $table->string('lat');
            $table->string('lng');
            // data priodik
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara_kandung');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->integer('jarak_rumah_kesekolah');
            // data orang tua
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->year('tahun_lahir_ayah');
            $table->foreignId('pekerjaan_id_ayah')->nullable()->constrained('ref_pekerjaan_orang_tuas')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('pendidikan_terakhir_id_ayah')->nullable()->constrained('ref_pendidikan_terakhirs')->cascadeOnUpdate()->nullOnDelete();
            $table->string('penghasilan_bulanan_ayah');
            $table->string('nama_instansi_ayah');
            $table->string('jabatan_ayah');
            $table->string('telp_ayah',13);


            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->year('tahun_lahir_ibu');
            $table->foreignId('pekerjaan_id_ibu')->nullable()->constrained('ref_pekerjaan_orang_tuas')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('pendidikan_terakhir_id_ibu')->nullable()->constrained('ref_pendidikan_terakhirs')->cascadeOnUpdate()->nullOnDelete();
            $table->string('penghasilan_bulanan_wali');
            $table->string('nama_instansi_ibu');
            $table->string('jabatan_ibu');
            $table->string('telp_ibu',13);
            

            $table->string('nama_wali');
            $table->string('nik_wali');
            $table->year('tahun_lahir_wali');
            $table->foreignId('pekerjaan_id_wali')->nullable()->constrained('ref_pekerjaan_orang_tuas')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('pendidikan_terakhir_id_wali')->nullable()->constrained('ref_pendidikan_terakhirs')->cascadeOnUpdate()->nullOnDelete();
            $table->string('penghasilan_bulanan_ibu');
            $table->string('nama_instansi_wali');
            $table->string('jabatan_wali');
            $table->string('telp_wali',13);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
