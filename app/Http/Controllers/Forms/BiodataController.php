<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\SimpanBiodataRequest;
use App\Models\RefAgama;
use App\Models\RefKebutuhanKhusus;
use App\Services\FormulirService;
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
        $tempat_tinggals = [
            "Orang Tua",
            "Kakek/Nenek",
            "Paman/Bibi",
            "Saudara Kandung",
            "Kerabat",
            "Panti/Pontren",
        ];
        return view('pages.forms.biodata', [
            'data' => Auth::user()->formulir->biodata(),
            'agamas' => RefAgama::all(),
            'kebutuhan_khususes' => RefKebutuhanKhusus::all(),
            'alat_transportasi' => $alat_transportasi,
            'tempat_tinggals' => $tempat_tinggals,
        ]);
    }
    public function simpan(SimpanBiodataRequest $simpanBiodataRequest, FormulirService $formulirService){
        $simpanBiodataRequest->simpan($formulirService);
        return redirect()->route('dashboard.pendaftaran');
    }
}