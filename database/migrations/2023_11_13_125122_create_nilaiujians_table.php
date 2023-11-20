<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilaiujians', function (Blueprint $table) {
            $table->integer('No');
            $table->string('Nama_Siswa');
            $table->string('Kelas');
            $table->string('Jurusan');
            $table->integer('Jumlah_Benar');
            $table->integer('Jumlah_Salah');
            $table->integer('Nilai_Akhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilaiujians');
    }
};
