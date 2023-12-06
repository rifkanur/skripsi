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
        Schema::create('kisikisigurus', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_kisi_kisi');
            $table->string('Mata_Pelajaran');
            $table->integer('Kelas');
            $table->string('Jurusan');
            $table->string('KIKD');
            $table->string('Tujuan_Pembelajaran');
            $table->string('Materi');
            $table->string('Indikator_Soal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kisikisigurus');
    }
};
