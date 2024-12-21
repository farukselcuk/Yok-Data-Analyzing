<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UniversiteBilgileri;

class ImportUniversiteBilgileri extends Command
{
    protected $signature = 'import:universite-bilgileri';
    protected $description = 'Excel dosyasından üniversite bilgilerini import eder';

    public function handle()
    {
        // Excel okuma ve veritabanına yazma kodları...
    }
} 