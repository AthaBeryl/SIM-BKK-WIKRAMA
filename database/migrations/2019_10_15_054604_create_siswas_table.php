<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nisn',100)->unique()->default('Belum Diisi');
            $table->integer('nis')->unique();
            $table->string('nama',100);
            $table->string('jurusan',40);
            $table->string('rayon',20)->default('Belum Diisi');
            $table->string('jk',20)->default('Belum Diisi');
            $table->year('masuk');
            $table->year('lulus');
            $table->longtext('alamat');
            $table->string('email',50)->default('Belum Diisi');
            $table->string('telp',20)->unique()->default('Belum Diisi');
            $table->string('status',30)->default('Belum Input');
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
        Schema::dropIfExists('siswas');
    }
}
