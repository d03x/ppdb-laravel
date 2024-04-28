<?php

namespace App\Http\Controllers;

use App\Models\{JalurPendaftaran,Jurusan};
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pages.pendaftaran', [
            'jalur' => JalurPendaftaran::all()->map(function($item){
                return [
                    'id' => $item->id,
                    'nama' => $item->nama,
                ];
            }),
            'jurusan' => Jurusan::all()->map(function($item){
                return [
                    'id' => $item->id,
                    'nama' => $item->nama." ({$item->kode}) ",
                ];
            }),
        ]);
    }

    public function cetakKartu()
    {
        if (!Auth::user()->formulir) {
            return redirect()->back();
        }
        return Pdf::loadView('pages.partials.prints.kartu_peserta')
        ->setPaper(array(
            0,0,415 , 800
        ), 'potrait')
        ->setWarnings(true)->stream();
    }
}
