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
