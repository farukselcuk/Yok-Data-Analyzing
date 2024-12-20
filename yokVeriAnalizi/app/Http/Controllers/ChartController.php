<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universites2022;
use App\Models\Universites2023;
use App\Models\Universites2024;

class ChartController extends Controller
{
    // 2022 Verisi için Chart Data Metodu
    public function chartData(Request $request)
    {
        // Veritabanından puan_turu alanına göre sayım yap
        $data = Universites2022::selectRaw("
                        SUM(CASE WHEN puan_turu = 'say' THEN 1 ELSE 0 END) as say,
                        SUM(CASE WHEN puan_turu = 'ea' THEN 1 ELSE 0 END) as ea,
                        SUM(CASE WHEN puan_turu = 'söz' THEN 1 ELSE 0 END) as sozel
                    ")->first();

        // Veriyi json formatında frontend için düzenle
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

    // 2023 ve 2024 Verisi için Chart Data Metodu
    public function getDataFor2023And2024()
    {
        // 2023 tablosundan veri al
        $data2023 = Universites2023::where('department_name', 'Yazılım Mühendisliği')
            ->avg('score'); // Ortalama puan

        // 2024 tablosundan veri al
        $data2024 = Universites2024::where('department_name', 'Yazılım Mühendisliği')
            ->avg('score'); // Ortalama puan

        return response()->json([
            '2023' => $data2023,
            '2024' => $data2024,
        ]);
    }
}
