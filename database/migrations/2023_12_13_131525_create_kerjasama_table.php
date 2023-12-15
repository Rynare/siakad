<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mou', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mitra');
            $table->string('asal_mitra');
            $table->string('Deskripsi_singkat_mitra');
            $table->date('tanggal_mulai_kerjasama');
            $table->date('tanggal_berakhir_kerjasama');
            $table->string('PT_Mitra');
            $table->string('tujuan_mitra');
            $table->string('file')->nullabel();
            $table->string('original_name_file');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('mou');
    }
};
