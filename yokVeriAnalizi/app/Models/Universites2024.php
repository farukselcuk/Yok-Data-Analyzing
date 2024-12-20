<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universites2022 extends Model
{
    protected $table = 'universites_2022';  // Tablo adı
    public $timestamps = false;  // Zaman damgası kullanmıyorsanız doğru

    protected $fillable = [
        'universite_id',
        'sehir',
        'universite_adi',
        'universite_turu',
        'puan_turu',
        'puan',
        'siralama',
        'bolum_adi',
        'burs',
        'bolum_kodu'
    ];
}

