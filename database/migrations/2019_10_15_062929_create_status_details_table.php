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
            $table->bigIncrements('id');
            $table->integer('nis');
            $table->integer('status_id');
            $table->string('jabatan',40)->nullable();
            $table->bigInteger('id_instansi')->nullable();
            $table->bigInteger('pendapatan')->nullable();
            $table->string('durasi_kontrak',100)->nullable();
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
