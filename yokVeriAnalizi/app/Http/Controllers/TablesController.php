<?php

namespace App\Http\Controllers;

use App\Models\Universites2022;
use Illuminate\Http\Request;
class TablesController extends Controller
{
    public function tables()
    {
        // Tüm üniversite verilerini al
        $universites = Universites2022::all();

        // Veriyi Blade şablonuna gönder
        return view('tables', compact('universites'));
    }

    public function search(Request $request)
    {
        // Kullanıcının arama terimini al
        $query = $request->input('query');

        // Arama işlemi yap ve sonuçları getir
        $universites = Universites2022::where('universite_adi', 'like', "%$query%")
            ->orWhere('sehir', 'like', "%$query%")
            ->orWhere('bolum_adi', 'like', "%$query%")
            ->get();

        // Veriyi Blade şablonuna gönder
        return view('tables', compact('universites'));
    }
}
