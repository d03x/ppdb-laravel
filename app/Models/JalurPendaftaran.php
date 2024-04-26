<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JalurPendaftaran extends Model
{
    use HasUuids;
    use HasFactory;
    protected $fillable = [
        'nama',
        'start',
        'end',
        'aktif',
        'deskripsi',
        'persyaratan'
    ];
    public function formulir(){
        return $this->belongsTo(Formulir::class);
    }
}
