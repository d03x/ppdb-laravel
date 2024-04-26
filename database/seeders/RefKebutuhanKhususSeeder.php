<?php

namespace Database\Seeders;

use App\Models\RefKebutuhanKhusus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefKebutuhanKhususSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            "Autis",
            "Bakat Istimewa",
            "Cerdas Istimewa",
            "Down Sindrome",
            "Hiper aktif",
            "Indigo",
            "Kesulitan Belajar",
            "Lainnya",
            "Narkoba",
            "Tidak",
            "Tuna Daksa Ringan",
            "Tuna Daksa Sedang",
            "Tuna ganda",
            "Tuna Grahita ringan",
            "Tuna Grahita Sedang",
            "Tuna Laras",
            "Tuna Netra",
            "Tuna Rungu",
            "Tuna Wicara"
        ];

        foreach($options as $option){
            RefKebutuhanKhusus::firstOrCreate([
                'nama' => $option
            ]);
        }
    }
}
