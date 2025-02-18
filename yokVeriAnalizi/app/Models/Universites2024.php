<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universites2024 extends Model
{
    protected $table = 'universites_2024';
    
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

