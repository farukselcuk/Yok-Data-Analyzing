<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('universite_bilgileri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('universite_id');
            $table->string('universite_adi');
            $table->string('universite_turu');
            $table->string('sehir');
            $table->integer('mevcut_sayisi')->nullable();
            $table->integer('spor_salonu_sayisi')->nullable();
            $table->decimal('yuz_olcumu', 10, 2)->nullable();
            $table->integer('laboratuvar_sayisi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('universite_bilgileri');
    }
}; 