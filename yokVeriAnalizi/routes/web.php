<?php

use App\Http\Controllers\DataTableController;
use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index'); // 'index' ifadesi, 'index.blade.php' dosyasını temsil eder
});
Route::get('/charts', function () {
    return view('charts'); // 'charts' ifadesi, 'charts.blade.php' dosyasını temsil eder
});
Route::get('/error-404', function () {
    return view('error-404'); // 'error-404' ifadesi, 'error-404.blade.php' dosyasını temsil eder
});
Route::get('/widgets', function () {
    return view('widgets'); // 'widgets' ifadesi, 'widgets.blade.php' dosyasını temsil eder
});
Route::get('/tables', function () {
    return view('tables'); // 'tables' ifadesi, 'tables.blade.php' dosyasını temsil eder
});
Route::get('/grid', function () {
    return view('grid'); // 'grid' ifadesi, 'grid.blade.php' dosyasını temsil eder
});
Route::get('/authentication-login', function () {
    return view('authentication-login'); // 'authentication-login' ifadesi, 'authentication-login.blade.php' dosyasını temsil eder
});
Route::get('/authentication-register', function () {
    return view('authentication-register'); // 'authentication-register' ifadesi, 'authentication-register' dosyasını temsil eder
});
Route::get('/form-basic', function () {
    return view('form-basic');
});
Route::get('/form-wizard', function () {
    return view('form-wizard');
});
Route::get('/icon-fontawesome', function () {
    return view('icon-fontawesome');
});
Route::get('/icon-material', function () {
    return view('icon-material');
});
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
Route::get('/universites', [DataTableController::class, 'tables']);

