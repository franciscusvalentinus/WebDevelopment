<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('merek');
            $table->date('tanggal_permohonan')->nullable();
            $table->string('nomor_permohonan')->nullable();
            $table->string('kelas')->nullable();
            $table->string('jenis_merek')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('brands');
    }
}
