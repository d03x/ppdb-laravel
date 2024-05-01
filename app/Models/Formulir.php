<?php

namespace App\Models;

use App\HasFields;
use App\StatusAkhirPendaftaran;
use App\StatusFormulir;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    use HasUuids;
    use HasFields;
    protected $fillable = [
        'id',
        'user_id',
        'jalur_pendaftaran_id',
        'jurusan_id',
        'no_pendaftaran',
        'tahun_ajaran_start',
        'tahun_ajaran_end',
        'status_formulir',
        'status_akhir',
        'accepted_date',
        'is_lock',
        'nama',
        'nisn',
        'nik',
        'ref_agama_id',
        'ref_kebutuhan_khusus_id',
        'tanggal_lahir',
        'tempat_lahir',
        'golongan_darah',
        'tinggal_dengan',
        'bahasa_sehari_hari',
        'email',
        'no_telepon_aktif',
        'no_wa',
        'alat_transportasi',
        'jalan',
        'dusun',
        'kode_pos',
        'lat',
        'lng',
        'anak_ke',
        'jumlah_saudara_kandung',
        'berat_badan',
        'tinggi_badan',
        'jarak_rumah_kesekolah',
        'nama_ayah',
        'nik_ayah',
        'tahun_lahir_ayah',
        'pekerjaan_id_ayah',
        'pendidikan_terakhir_id_ayah',
        'penghasilan_bulanan_ayah',
        'nama_instansi_ayah',
        'jabatan_ayah',
        'telp_ayah',
        'nama_ibu',
        'nik_ibu',
        'tahun_lahir_ibu',
        'pekerjaan_id_ibu',
        'pendidikan_terakhir_id_ibu',
        'penghasilan_bulanan_wali',
        'nama_instansi_ibu',
        'jabatan_ibu',
        'telp_ibu',
        'nama_wali',
        'nik_wali',
        'tahun_lahir_wali',
        'pekerjaan_id_wali',
        'pendidikan_terakhir_id_wali',
        'penghasilan_bulanan_ibu',
        'nama_instansi_wali',
        'jabatan_wali',
        'telp_wali',
    ];

    protected $casts = [
        'status_akhir' => StatusAkhirPendaftaran::class,
        'status_formulir' => StatusFormulir::class,
    ];
    protected $with = ['user', 'jurusan', 'jalur_pendaftaran', 'agama', 'kebutuhan_khusus'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function jalur_pendaftaran()
    {
        return $this->belongsTo(JalurPendaftaran::class);
    }

    public function agama()
    {
        return $this->belongsTo(RefAgama::class);
    }

    public function kebutuhan_khusus()
    {
        return $this->belongsTo(RefKebutuhanKhusus::class);
    }

    public function scopeBiodata($query)
    {
        $data = $this->toArray();

        return array_intersect_key($data, array_flip($this->field_biodata));
    }

    public function scopeOrangTua($query)
    {
        $data = $this->toArray();

        return array_intersect_key($data, array_flip($this->field_orang_tua));
    }

    public function scopePriodik($query)
    {
        $data = $this->toArray();

        return array_intersect_key($data, array_flip($this->field_priodik));
    }
}
