<?php

namespace Database\Seeders;

use App\Models\JalurPendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JalurPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JalurPendaftaran::firstOrCreate([
            'nama' => "Prestasi",
            'start' => now(),
            'end' => now()->addMonths(1),
            'aktif'=>true,
            'deskripsi' => fake()->sentence(),
            'persyaratan' => fake()->sentence()
        ]);
        JalurPendaftaran::firstOrCreate([
            'nama' => "UMUM",
            'start' => now(),
            'end' => now()->addMonths(3),
            'aktif'=>true,
            'deskripsi' => fake()->sentence(),
            'persyaratan' => fake()->sentence()
        ]);
        
    }
}
