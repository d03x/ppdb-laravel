<?php

namespace Database\Seeders;

use App\Models\RefAgama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefAgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RefAgama::firstOrCreate([
            'nama' => 'ISLAM'
        ]);
        RefAgama::firstOrCreate([
            'nama' => 'KRISTEN'
        ]);
        RefAgama::firstOrCreate([
            'nama' => 'HINDU'
        ]);
        RefAgama::firstOrCreate([
            'nama' => 'BUDDHA'
        ]);
        
        
        
    }
}
