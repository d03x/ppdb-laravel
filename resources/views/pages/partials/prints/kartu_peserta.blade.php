<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KARTU PENDAFTARAN</title>
    <style>
        * {
            margin: 5px;
        }

        body {
            font-family: 'Times New Roman';
        }

        tr td {
            font-size: small;
        }

        th {
            text-align: left;
        }

        .wrapper {
            border: 0.3px solid;
            padding: 0px 10px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <table style="width:100%;border-bottom:1px solid;padding:6px 10px;">
            <tr>
                <th style="width:50px;">
                    <img width="50px" src="{{ base_path('public/logo.png') }}" alt="">
                </th>
                <th style="text-align: left">
                    <div style="font-size: 17px;">PPDB SMK IFSU</div>
                    <div style="font-size:12px;">https://ppdb.smkifsu.sch.id</div>
                </th>
                <th width="120px" style="border: 0.1px solid;text-align:center;font-size:12px;color:green;border-radius:10px;">
                    <div>
                        DIVERIFIKASI
                    </div>
                </th>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan="4" style="padding:  0px  0px 10px 0px;font-size:21px;">Kartu Peserta PPDB SMK IFSU23
                </th>
            </tr>
            <tr>
                <td width="130px">No Pendaftaran</th>
                <td style="text-align: center">:</td>
                <td>{{ $current_user->formulir->no_pendaftaran }}</td>

            </tr>
            <tr>
                <td width="130px">Nama Pendaftar</th>
                <td style="text-align: center">:</td>
                <td>{{ $current_user->name }}</td>
            </tr>
            <tr>
                <td width="130px">Jurusan</th>
                <td style="text-align: center">:</td>
                <td>{{ $current_user->formulir->jurusan->nama }}</td>

            </tr>
           
            <tr>
                <td width="130px">Jalur Pendaftaran</th>
                <td style="text-align: center">:</td>
                <td>{{ $current_user->formulir->jalur_pendaftaran->nama }}</td>

            </tr>
            <tr>
                <td width="130px">Asal Sekolah</th>
                <td style="text-align: center">:</td>
                <td>SMPN 7 SUMEDANG</td>
            </tr>
            <tr>
                <td width="130px">NIK</th>
                <td style="text-align: center">:</td>
                <td>{{ $current_user->formulir->nik ?? '-' }}</td>
            </tr>
            <tr>
                <td width="130px">Alamat Siswa</th>
                <td style="text-align: center">:</td>
                <td>
                    Dusun Pasir Peti, RT03/RW05
                    Desa Margalaksana,Sumedang
                </td>
            </tr>
            <tr>
                <td width="130px">Kode POS</th>
                <td style="text-align: center">:</td>
                <td>{{ $current_user->formulir->kode_pos ?? '-' }}</td>
            </tr>
            <tr>
                <td width="130px">No. Telpon</th>
                <td style="text-align: center">:</td>
                <td>{{ $current_user->formulir->no_telepon_aktif ?? '-' }}</td>
            </tr>
            <tr>
                <th colspan="4" style="padding: 20px 0px;font-size:smaller;">
                    <i>
                        Saya tunduk dan patuh terhadap segala ketentuan dan peraturan PPDB {{ config('app.name') }}
                    </i>
                </th>
            </tr>
            <tr style="text-align: right">
                <td style="padding: 10px;" colspan="4">Tanda Tangan</td>
            </tr>

            <tr style="text-align: right;">
                <td colspan="4" style="padding:20px 0px;">({{ $current_user->name }})</td>
            </tr>

        </table>
    </div>
    <p>
        Dicetak pada : 28 April 2024
    </p>
    <ul style="font-size:13px;">
        <li>FORMULIR INI ADALAH BUKTI ANDA TERDAFTAR SEBAGAI CALON SISWA MELALUI SISTEM PPDB
            KULIAH SECARA ONLINE. FORMULIR INI BUKAN MERUPAKAN BUKTI BAHWA ANDA TELAH DITETAPKAN SEBAGAI
            SEBAGAI PENDAFTAR</li>
        <li>
            Proses pencalonan dan penetapan sebagai Siswa dilakukan oleh {{ config('app.name') }} melalui
            proses dan tahapan pendaftaran yang ada
        </li>
        <li>
            Cetak kartu peserta  menggunakan kertas berukuran minimal A5

        </li>
        <li>
            Kartu peserta ini diberikan kepada pendaftar sebagai tanda bukti bahwa siswa yang bersangkutan telah
            melakukan tahap pendaftaran secara online
        </li>
      
        <li>
            Simpan baik-baik kartu peserta ini karena harus dibawa pada saat daftar ulang atau test di sekolah

        </li>
    </ul>



</body>

</html>
