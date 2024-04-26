<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = ['nama','kode'];
    public function formulir(){
        return $this->belongsTo(Formulir::class);
    }
}
