<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyrightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copyrights', function (Blueprint $table) {
            $table->id();
            $table->string('judul_ciptaan');
            $table->date('tanggal_permohonan')->nullable();
            $table->string('nomor_permohonan')->nullable();
            $table->string('pemegang_hak_cipta')->nullable();
            $table->string('nomor_pencatatan')->nullable();
            $table->date('tanggal_penerimaan')->nullable();
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
        Schema::dropIfExists('copyrights');
    }
}
