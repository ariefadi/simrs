<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        DB::table('pasiens')->insert([
            [
                'nama' => 'Arief Dwi Cahyo Adi',
                'alamat' => 'Klaten',
                'no_telepon' => '085600449570',
                'jenis_kelamin' => 'Laki-laki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Linda Mayasari',
                'alamat' => 'Klaten',
                'no_telepon' => '08234567890',
                'jenis_kelamin' => 'Perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Shesya Adelia Shifabella',
                'alamat' => 'Klaten',
                'no_telepon' => '08345678901',
                'jenis_kelamin' => 'Perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
