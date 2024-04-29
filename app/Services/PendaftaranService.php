<?php

namespace App\Services;

use App\Exceptions\GagalMenyimpanDataException;
use App\Exceptions\GagalMenyimpanException;
use App\Exceptions\PendaftaranSudahAdaException;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

class PendaftaranService
{
    /**
     * Create a new class instance.
     */
    public function buatBaru(User|Authenticatable $user, $data)
    {
        if ( $user->formulir ) {
            throw new PendaftaranSudahAdaException("Pendaftaran sudah ada!");
        }
        $data = [
            'no_pendaftaran' => "PPDB-".now()->format('Y')."-". rand(),
            ...$data
        ];
       $save = $user->formulir()->firstOrCreate($data);
        if ( !$save ){
            throw new GagalMenyimpanDataException("Gagal meyimpan data formulir");
        }
        return true;
    }
}
