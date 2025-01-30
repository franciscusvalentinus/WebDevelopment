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
        Schema::table('fragrances', function (Blueprint $table) {
            $table->unsignedBigInteger('supplied_by')->index()->after('id');
            $table->foreign('supplied_by')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fragrances', function (Blueprint $table) {
            $table->dropColumn('supplied_by');
        });
    }
};
