<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKebutuhanKhusus extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    public function formulir(){
        return $this->belongsTo(Formulir::class);
    }
}
