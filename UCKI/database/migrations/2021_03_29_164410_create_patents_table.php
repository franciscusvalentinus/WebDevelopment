<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patents', function (Blueprint $table) {
            $table->id();
            $table->string('judul_ciptaan');
            $table->date('tanggal_permohonan')->nullable();
            $table->string('nomor_efilling_f')->nullable();
            $table->string('nomor_efilling_s')->nullable();
            $table->string('pemegang_paten')->nullable();
            $table->string('jenis_permohonan')->nullable();
            $table->string('nomor_permohonan_f')->nullable();
            $table->string('nomor_permohonan_s')->nullable();
            $table->string('jumlah_klaim')->nullable();
            $table->string('helper');
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
        Schema::dropIfExists('patents');
    }
}
