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
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('NIS');
            $table->string('Nama');
            $table->date('Tanggal_Lahir');
            $table->string('Jenis_Kelamin');
            $table->string('Agama');
            $table->integer('Kelas');
            $table->string('Jurusan');
            $table->string('Email')->unique();
            $table->string('Password')->unique();
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
        Schema::dropIfExists('data_siswas');
    }
};
