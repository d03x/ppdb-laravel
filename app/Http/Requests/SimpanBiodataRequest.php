<?php

namespace App\Http\Requests;

use App\Exceptions\GagalMenyimpanDataException;
use App\Services\FormulirService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SimpanBiodataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nama" => "required",
            "nisn" => "required",
            "nik" => "required",
            "ref_agama_id" => "required",
            "ref_kebutuhan_khusus_id" => "required",
            "tanggal_lahir" => "required",
            "tempat_lahir" => "required",
            "golongan_darah" => "required",
            "tinggal_dengan" => "required",
            "bahasa_sehari_hari" => "required",
            "email" => "required",
            "no_telepon_aktif" => "required",
            "no_wa" => "required",
            "alat_transportasi" => "required",
        ];
    }
    public function simpan(FormulirService $formulirService){
        try{
            $data = $this->validated();
            $formulirService->simpanBiodata($data);
        }catch(GagalMenyimpanDataException $gagalMenyimpanDataException){
            throw ValidationException::withMessages([
                'nama' => $gagalMenyimpanDataException->getMessage()
            ]);
        }
    }
}
