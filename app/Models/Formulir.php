<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory,HasUuids;
    protected $with = ['user','jurusan','jalur_pendaftaran','agama','kebutuhan_khusus'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
    public function jalur_pendaftaran(){
        return $this->belongsTo(JalurPendaftaran::class);
    }
    public function agama(){
        return $this->belongsTo(RefAgama::class);
    }
    public function kebutuhan_khusus(){
        return $this->belongsTo(RefKebutuhanKhusus::class);
    }
    
    
}
