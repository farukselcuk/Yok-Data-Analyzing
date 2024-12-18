<?php
namespace App\Http\Controllers;

use App\Models\Universites2022;

abstract class Controller
{
    // Soyut bir sınıfın içeriği burada olabilir
}

class DataTableController extends Controller
{
    // Bu metod verileri çekip, tabloyu gösterecek
    public function tables()
    {
        // Veritabanından veri al
        $universites = Universites2022::all();

        // Veriyi Blade şablonuna gönder
        return view('tables', compact('universites'));
    }
}
