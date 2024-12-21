<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversiteBilgileri extends Model
{
    protected $table = 'universite_bilgileri';
    
    protected $fillable = [
        'universite_id',
        'universite_adi',
        'universite_turu',
        'sehir',
        'mevcut_sayisi',
        'spor_salonu_sayisi',
        'yuz_olcumu',
        'laboratuvar_sayisi'
    ];
} 