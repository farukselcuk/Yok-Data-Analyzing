<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UniversiteBilgileri;

class UniversiteBilgileriSeeder extends Seeder
{
    public function run()
    {
        // Örnek veri
        UniversiteBilgileri::create([
            'universite_id' => 1,
            'universite_adi' => 'AYDIN ADNAN MENDERES ÜNİVERSİTESİ',
            'universite_turu' => 'DEVLET',
            'sehir' => 'AYDIN',
            'mevcut_sayisi' => 5000,
            'spor_salonu_sayisi' => 3,
            'laboratuvar_sayisi' => 10,
            'yuz_olcumu' => 15000.50
        ]);

        // Diğer üniversiteler için benzer kayıtlar...
    }
} 