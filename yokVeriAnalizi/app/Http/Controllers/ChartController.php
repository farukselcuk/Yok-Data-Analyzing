<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universites2022;
use App\Models\Universites2023;
use App\Models\Universites2024;
use App\Models\Universite;
use Illuminate\Support\Facades\DB;
use App\Models\UniversiteBilgileri;

class ChartController extends Controller
{
    // 2022 Verisi için Chart Data Metodu
    public function chartData(Request $request)
    {
        // 2024 verisi için puan türü dağılımı
        $data2024 = Universites2024::selectRaw("
            SUM(CASE WHEN puan_turu = 'say' THEN 1 ELSE 0 END) as say,
            SUM(CASE WHEN puan_turu = 'ea' THEN 1 ELSE 0 END) as ea,
            SUM(CASE WHEN puan_turu = 'söz' THEN 1 ELSE 0 END) as sozel
        ")->first();

        // 2023 verisi için puan türü dağılımı
        $data2023 = Universites2023::selectRaw("
            SUM(CASE WHEN puan_turu = 'say' THEN 1 ELSE 0 END) as say,
            SUM(CASE WHEN puan_turu = 'ea' THEN 1 ELSE 0 END) as ea,
            SUM(CASE WHEN puan_turu = 'söz' THEN 1 ELSE 0 END) as sozel
        ")->first();

        // 2022 verisi için puan türü dağılımı
        $data2022 = Universites2022::selectRaw("
            SUM(CASE WHEN puan_turu = 'say' THEN 1 ELSE 0 END) as say,
            SUM(CASE WHEN puan_turu = 'ea' THEN 1 ELSE 0 END) as ea,
            SUM(CASE WHEN puan_turu = 'söz' THEN 1 ELSE 0 END) as sozel
        ")->first();

        // Veriyi json formatında frontend için düzenle
        $dataArr = [
            'labels' => ['Sayısal', 'Eşit Ağırlık', 'Sözel'],
            'datasets' => [
                [
                    'label' => '2024 Dağılımı',
                    'data' => [$data2024->say, $data2024->ea, $data2024->sozel],
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56']
                ],
                [
                    'label' => '2023 Dağılımı',
                    'data' => [$data2023->say, $data2023->ea, $data2023->sozel],
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56']
                ],
                [
                    'label' => '2022 Dağılımı',
                    'data' => [$data2022->say, $data2022->ea, $data2022->sozel],
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56']
                ]
            ]
        ];

        // Benzersiz üniversiteleri getir (tüm yıllardan)
        $universiteler = Universites2024::select('universite_adi')
            ->distinct()
            ->orderBy('universite_adi')
            ->get();

        return view('charts', compact('dataArr', 'universiteler'));
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

    public function getUniversiteData($id)
    {
        try {
            $universiteAdi = urldecode($id);
            
            // Her yıl için bölüm sayıları
            $data2022 = DB::table('universites_2022')
                ->where('universite_adi', 'LIKE', '%' . $universiteAdi . '%')
                ->count();
            
            $data2023 = DB::table('universites_2023')
                ->where('universite_adi', 'LIKE', '%' . $universiteAdi . '%')
                ->count();
            
            $data2024 = DB::table('universites_2024')
                ->where('universite_adi', 'LIKE', '%' . $universiteAdi . '%')
                ->count();

            \Log::info('Bölüm sayıları:', [
                'universite' => $universiteAdi,
                '2022' => $data2022,
                '2023' => $data2023,
                '2024' => $data2024
            ]);

            // Kontenjan verilerini hazırla
            $kontenjanVerileri = [
                'labels' => ['2022', '2023', '2024'],
                'datasets' => [[
                    'label' => 'Bölüm Sayısı',
                    'data' => [$data2022, $data2023, $data2024],
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
                    'borderColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
                    'borderWidth' => 1
                ]]
            ];

            // Puan türü dağılımı için 2024 verilerini kullan
            $bolumDagilimi = DB::table('universites_2024')
                ->where('universite_adi', 'LIKE', '%' . $universiteAdi . '%')
                ->selectRaw("
                    SUM(CASE WHEN LOWER(TRIM(puan_turu)) = 'sayısal' OR LOWER(TRIM(puan_turu)) = 'say' THEN 1 ELSE 0 END) as say,
                    SUM(CASE WHEN LOWER(TRIM(puan_turu)) = 'eşit ağırlık' OR LOWER(TRIM(puan_turu)) = 'ea' THEN 1 ELSE 0 END) as ea,
                    SUM(CASE WHEN LOWER(TRIM(puan_turu)) = 'sözel' OR LOWER(TRIM(puan_turu)) = 'söz' THEN 1 ELSE 0 END) as sozel
                ")
                ->first();

            // Üniversite bilgilerini getir
            $universiteBilgileri = UniversiteBilgileri::where('universite_adi', $universiteAdi)->first();
            
            if (!$universiteBilgileri) {
                return response()->json(['error' => 'Üniversite bilgileri bulunamadı'], 404);
            }

            return response()->json([
                'mevcut_sayi' => $universiteBilgileri->mevcut_sayisi,
                'spor_salonu_sayisi' => $universiteBilgileri->spor_salonu_sayisi,
                'laboratuvar_sayisi' => $universiteBilgileri->laboratuvar_sayisi,
                'yuz_olcumu' => $universiteBilgileri->yuz_olcumu,
                'artis_orani' => $this->hesaplaArtisOrani($data2022, $data2023, $data2024),
                'bolum_dagilimi' => [
                    'labels' => ['Sayısal', 'Eşit Ağırlık', 'Sözel'],
                    'datasets' => [[
                        'data' => [$bolumDagilimi->say, $bolumDagilimi->ea, $bolumDagilimi->sozel],
                        'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56']
                    ]]
                ],
                'kontenjan_verileri' => $kontenjanVerileri
            ]);
        } catch (\Exception $e) {
            \Log::error('Hata: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    private function hesaplaArtisOrani($kontenjan2022, $kontenjan2023, $kontenjan2024)
    {
        if ($kontenjan2023 == 0) return 0;
        return round((($kontenjan2024 - $kontenjan2023) / $kontenjan2023) * 100);
    }

    private function formatBolumDagilimi($data)
    {
        $labels = $data->pluck('puan_turu')->map(function($tur) {
            return strtoupper($tur);
        });
        
        return [
            'labels' => $labels,
            'datasets' => [[
                'data' => $data->pluck('toplam'),
                'backgroundColor' => [
                    '#FF6384',
                    '#36A2EB',
                    '#FFCE56',
                    '#4BC0C0',
                    '#9966FF'
                ]
            ]]
        ];
    }

    private function formatKontenjanVerileri($data)
    {
        return [
            'labels' => collect($data)->pluck('yil'),
            'datasets' => [[
                'label' => 'Kontenjan',
                'data' => collect($data)->pluck('kontenjan'),
                'backgroundColor' => '#36A2EB'
            ]]
        ];
    }
}
