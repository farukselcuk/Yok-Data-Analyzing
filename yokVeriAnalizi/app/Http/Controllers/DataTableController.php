<?php
namespace App\Http\Controllers;

use App\Models\Universites2022;

class DataTableController extends Controller
{
    public function index()
    {
        // Veritabanından veri al
        $universites = Universites2022::all();

    dd($universites);
        // Veriyi Blade şablonuna gönder
        return view('tables', compact('universites'));
    }
}
