<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Models\RefAgama;
use App\Models\RefKebutuhanKhusus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function __invoke(){
        $alat_transportasi = [
            'MOTOR',
            'JETPAK',
            'MOBIL',
            'ANGKOT',
            'MINIBUS',
            'BUS',
            'SEPEDA',
            'KERETA',
            'PESAWAT',
            'KAPAL LAUT',
            'BANTUAN JIN',
            'MOTOR LISTRIK',
            'JALAN KAKI'
        ];
        return view('pages.forms.biodata', [
            'data' => Auth::user()->formulir->biodata(),
            'agamas' => RefAgama::all(),
            'kebutuhan_khususes' => RefKebutuhanKhusus::all(),
            'alat_transportasi' => $alat_transportasi
        ]);
    }
}