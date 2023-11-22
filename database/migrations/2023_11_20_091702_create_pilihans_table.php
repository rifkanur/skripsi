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
        Schema::create('pilihans', function (Blueprint $table) {
            $table->id();
            $table->id('id_Soal');
            $table->string('Pilihan_A');
            $table->string('Pilihan_B');
            $table->string('Pilihan_C');
            $table->string('Pilihan_D');
            $table->string('Pilihan_E');
            $table->valid('ya');
            $table->valid('tidak');
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
        Schema::dropIfExists('pilihans');
    }
};
