<?php

namespace App;

trait HasFields
{
    protected $field_biodata = [
        "nama",
        "nisn",
        "nik",
        "ref_agama_id",
        "ref_kebutuhan_khusus_id",
        "tanggal_lahir",
        "tempat_lahir",
        "golongan_darah",
        "tinggal_dengan",
        "bahasa_sehari_hari",
        "email",
        "no_telepon_aktif",
        "no_wa",
        "alat_transportasi",
    ];
    protected $field_alamat = [
        "jalan",
        "dusun",
        "kode_pos",
        "lat",
        "lng",
    ];
    protected $field_priodik = [
        "anak_ke",
        "jumlah_saudara_kandung",
        "berat_badan",
        "tinggi_badan",
        "jarak_rumah_kesekolah",
    ];
    protected $field_orang_tua = [
        "nama_ayah",
        "nik_ayah",
        "tahun_lahir_ayah",
        "pekerjaan_id_ayah",
        "pendidikan_terakhir_id_ayah",
        "penghasilan_bulanan_ayah",
        "nama_instansi_ayah",
        "jabatan_ayah",
        "telp_ayah",
        "nama_ibu",
        "nik_ibu",
        "tahun_lahir_ibu",
        "pekerjaan_id_ibu",
        "pendidikan_terakhir_id_ibu",
        "penghasilan_bulanan_wali",
        "nama_instansi_ibu",
        "jabatan_ibu",
        "telp_ibu",
        "nama_wali",
        "nik_wali",
        "tahun_lahir_wali",
        "pekerjaan_id_wali",
        "pendidikan_terakhir_id_wali",
        "penghasilan_bulanan_ibu",
        "nama_instansi_wali",
        "jabatan_wali",
        "telp_wali",
    ];
}
