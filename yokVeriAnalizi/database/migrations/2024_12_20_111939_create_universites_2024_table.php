<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversites2024Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universites_2024', function (Blueprint $table) {
            $table->id(); // Otomatik birincil anahtar
            $table->unsignedBigInteger('universite_id'); // Üniversite ID'si
            $table->string('sehir'); // Şehir
            $table->string('universite_adi'); // Üniversite Adı
            $table->string('universite_turu'); // Üniversite Türü
            $table->string('puan_turu'); // Puan Türü
            $table->decimal('puan', 8, 2)->nullable(); // Puan
            $table->integer('siralama')->nullable(); // Sıralama
            $table->string('bolum_adi'); // Bölüm Adı
            $table->string('burs')->nullable(); // Burs
            $table->string('bolum_kodu'); // Bölüm Kodu
            $table->timestamps(); // Oluşturulma ve güncellenme zamanları
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universites_2024');
    }
}
