<?php

use App\Http\Controllers\TablesController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;

// Anasayfa için yönlendirme
Route::get('/index', function () {
    return view('index'); // 'index' ifadesi, 'index.blade.php' dosyasını temsil eder
});

// Grafikler için yönlendirme
Route::get('/charts', function () {
    return view('charts'); // 'charts' ifadesi, 'charts.blade.php' dosyasını temsil eder
});

// 404 Sayfası için yönlendirme
Route::get('/error-404', function () {
    return view('error-404'); // 'error-404' ifadesi, 'error-404.blade.php' dosyasını temsil eder
});

// Widget'lar için yönlendirme
Route::get('/widgets', function () {
    return view('widgets'); // 'widgets' ifadesi, 'widgets.blade.php' dosyasını temsil eder
});

// Grid için yönlendirme
Route::get('/grid', function () {
    return view('grid'); // 'grid' ifadesi, 'grid.blade.php' dosyasını temsil eder
});

// Giriş ve kayıt sayfaları
Route::get('/authentication-login', function () {
    return view('authentication-login'); // 'authentication-login' ifadesi, 'authentication-login.blade.php' dosyasını temsil eder
});
Route::get('/authentication-register', function () {
    return view('authentication-register'); // 'authentication-register' ifadesi, 'authentication-register.blade.php' dosyasını temsil eder
});

// Form sayfaları
Route::get('/form-basic', function () {
    return view('form-basic');
});
Route::get('/form-wizard', function () {
    return view('form-wizard');
});

// İkonlar
Route::get('/icon-fontawesome', function () {
    return view('icon-fontawesome');
});
Route::get('/icon-material', function () {
    return view('icon-material');
});

// Diğer sayfalar
Route::get('/pages-buttons', function () {
    return view('pages-buttons');
});
Route::get('/pages-gallery', function () {
    return view('pages-gallery');
});
Route::get('/pages-calendar', function () {
    return view('pages-calendar');
});
Route::get('/pages-invoice', function () {
    return view('pages-invoice');
});

// Üniversite verileri için route
Route::get('/universites', [TablesController::class, 'tables']);
Route::get('/universites/search', [TablesController::class, 'search'])->name('universites.search');

// Grafik verileri için route
Route::get('/charts', [ChartController::class, 'chartData'])->name('chart.data');

Route::get('/get-universite-data/{id}', [ChartController::class, 'getUniversiteData']);
Route::get('/get-university-types', [ChartController::class, 'getUniversityTypes']);
