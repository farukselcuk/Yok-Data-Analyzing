<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Universites2022;

class ChartController extends Controller
{
    public function chartData(Request $request)
    {
        // Veritabanından puan_turu alanına göre sayım yap
        $data = Universites2022::selectRaw("
                        SUM(CASE WHEN puan_turu = 'say' THEN 1 ELSE 0 END) as say,
                        SUM(CASE WHEN puan_turu = 'ea' THEN 1 ELSE 0 END) as ea,
                        SUM(CASE WHEN puan_turu = 'söz' THEN 1 ELSE 0 END) as sozel
                    ")->first();

        // Veriyi json formatında döndürme
        $dataArr = [
            'labels' => ['Sayısal', 'Eşit Ağırlık', 'Sözel'], // Grafikte gösterilecek etiketler
            'datasets' => [
                [
                    'label' => 'Puan Türlerine Göre Dağılım',
                    'data' => [$data->say, $data->ea, $data->sozel], // Her bir türün sayısı
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'] // Renkler
                ]
            ]
        ];
        // Veriyi view'e gönderme
        return view('charts', compact('dataArr'));
    }
}
