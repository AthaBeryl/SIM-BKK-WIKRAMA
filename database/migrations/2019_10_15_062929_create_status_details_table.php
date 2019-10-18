<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_details', function (Blueprint $table) {
            $table->integer('nis')->primary();
            $table->string('jabatan',40)->default('Belum Diisi')->nullable();
            $table->string('namaInstansi',40)->default('Belum Diisi')->nullable();
            $table->longtext('alamatInstansi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_details');
    }
}
