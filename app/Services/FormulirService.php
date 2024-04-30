<?php

namespace App\Services;

use App\Models\Formulir;
use Illuminate\Support\Facades\Auth;

class FormulirService
{
    /**
     * Create a new class instance.
     */
    public function getFormulirs()
    {
        $biodata = Formulir::where('user_id', Auth::id());

        return [
            'biodata' => $biodata->biodata(),
            'orang_tua' => $biodata->orangTua(),
            'priodik' => $biodata->priodik(),
        ];
    }

    public function persentase()
    {
        $noEmptyData = [];
        $data = (array) $this->getFormulirs();
       foreach ($data as $key => $value) {
            $noEmptyData[$key] = 0;
            $count = count((array)$value);
            foreach( $value as $values ) {
                if(!empty($values) && null !== $values) {
                    $noEmptyData[$key]++;
                } 
            }
       }
       $persentases =[];
       foreach($noEmptyData  as $key => $value){
            if($value > 0){
                $persentases[$key]  = round(($value / count($data[$key]) ) * 100,1);
            }else{
                $persentases[$key] = 0;
            }
       }
       return $persentases;
    }
}
