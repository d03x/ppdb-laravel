<?php

namespace App\Http\Controllers;

use App\Exceptions\GagalMenyimpanDataException;
use App\Exceptions\PendaftaranSudahAdaException;
use App\Models\JalurPendaftaran;
use App\Models\Jurusan;
use App\Services\PendaftaranService;
use Barryvdh\DomPDF\Facade\Pdf;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pages.pendaftaran', [
            'jalur' => JalurPendaftaran::all()->map(function ($item) {
                return [
                    'id' => $item->id,
                    'nama' => $item->nama,
                ];
            }),
            'jurusan' => Jurusan::all()->map(function ($item) {
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
        ->setPaper([
            0, 0, 415, 800,
        ], 'potrait')
        ->setWarnings(true)->stream();
    }

    public function simpan_pendaftaran(Request $request, PendaftaranService $pendaftaranService)
    {
        $data = $request->validate([
            'jalur_pendaftaran_id'=>"required",
            'jurusan_id' => "required",
            'jenis_pendaftaran' => "required",
        ]);

        try {
            $pendaftaranService->buatBaru(Auth::user(),$data);
        } catch (GagalMenyimpanDataException|PendaftaranSudahAdaException $th) {
            Log::error($th->getMessage());
            throw ValidationValidationException::withMessages([
                'feedback_error' => $th->getMessage()
            ]);
        }

        

    }
}
