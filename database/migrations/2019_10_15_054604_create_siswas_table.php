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
            $table->bigInteger('user_id')->unique();
            $table->string('nisn',100)->unique()->nullable();
            $table->integer('nis')->unique();
            $table->string('jurusan_id',40);
            $table->string('rayon_id',40);
            $table->string('jk',20);
            $table->year('masuk');
            $table->year('lulus');
            $table->longtext('alamat')->nullable();
            // $table->string('email',50)->default('Belum Diisi');
            $table->string('telp',20)->nullable();
            $table->string('status_id',30)->nullable();
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
