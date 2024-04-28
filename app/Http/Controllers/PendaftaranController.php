<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pages.pendaftaran');
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
