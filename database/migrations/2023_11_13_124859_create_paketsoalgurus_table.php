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
        Schema::create('paketsoalgurus', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Paket_Soal');
            $table->string('Mata_Pelajaran');
            $table->integer('Kelas');
            $table->string('Jurusan');
            $table->string('Soal_Ujian');
            $table->string('Jawaban_A');
            $table->string('Jawaban_B');
            $table->string('Jawaban_C');
            $table->string('Jawaban_D');
            $table->string('Jawaban_E');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paketsoalgurus');
    }
};
