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
            $table->foreignIdFor(User::class)->constrained('users');
            $table->foreignUuid('jalur_pendaftaran_id')->constrained('jalur_pendaftarans');
            $table->foreignUuid('jurusan_id')->constrained('jurusans');
            $table->string('no_pendaftaran')->nullable();
            $table->year('tahun_ajaran_start')->nullable();
            $table->year('tahun_ajaran_end')->nullable();
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
            $table->string('nama')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->foreignIdFor(RefAgama::class)->nullable()->constrained('ref_agamas')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(RefKebutuhanKhusus::class)->nullable()->constrained('ref_kebutuhan_khususes')->nullOnDelete()->cascadeOnUpdate();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->enum('golongan_darah', [
                'A',
                'O',
                'AB',
                'B',
            ])->nullable();
            $table->string('tinggal_dengan')->nullable();
            $table->string('bahasa_sehari_hari')->nullable();
            $table->string('email')->nullable();
            $table->char('no_telepon_aktif', 13)->nullable();
            $table->char('no_wa', 13)->nullable();
            $table->string('alat_transportasi')->nullable();
            // alamat
            $table->string('jalan')->nullable();
            $table->string('dusun')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            // data priodik
            $table->integer('anak_ke')->nullable();
            $table->integer('jumlah_saudara_kandung')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->integer('jarak_rumah_kesekolah')->nullable();
            // data orang tua
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->year('tahun_lahir_ayah')->nullable();
            $table->foreignId('pekerjaan_id_ayah')->nullable()->constrained('ref_pekerjaan_orang_tuas')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('pendidikan_terakhir_id_ayah')->nullable()->constrained('ref_pendidikan_terakhirs')->cascadeOnUpdate()->nullOnDelete();
            $table->string('penghasilan_bulanan_ayah')->nullable();
            $table->string('nama_instansi_ayah')->nullable();
            $table->string('jabatan_ayah')->nullable();
            $table->string('telp_ayah',13)->nullable();


            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->year('tahun_lahir_ibu')->nullable();
            $table->foreignId('pekerjaan_id_ibu')->nullable()->constrained('ref_pekerjaan_orang_tuas')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('pendidikan_terakhir_id_ibu')->nullable()->constrained('ref_pendidikan_terakhirs')->cascadeOnUpdate()->nullOnDelete();
            $table->string('penghasilan_bulanan_wali')->nullable();
            $table->string('nama_instansi_ibu')->nullable();
            $table->string('jabatan_ibu')->nullable();
            $table->string('telp_ibu',13)->nullable();
            

            $table->string('nama_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->year('tahun_lahir_wali')->nullable();
            $table->foreignId('pekerjaan_id_wali')->nullable()->constrained('ref_pekerjaan_orang_tuas')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('pendidikan_terakhir_id_wali')->nullable()->constrained('ref_pendidikan_terakhirs')->cascadeOnUpdate()->nullOnDelete();
            $table->string('penghasilan_bulanan_ibu')->nullable();
            $table->string('nama_instansi_wali')->nullable();
            $table->string('jabatan_wali')->nullable();
            $table->string('telp_wali',13)->nullable();
            
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
