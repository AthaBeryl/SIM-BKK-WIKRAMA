<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewDataSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        db::statement('CREATE VIEW dataSiswa as 
        SELECT siswas.id,siswas.user_id,siswas.nisn,siswas.nis,users.name,siswas.jk,siswas.jurusan_id,jurusans.jurusan,siswas.rayon_id,rayons.rayon,siswas.masuk,siswas.lulus,siswas.alamat,siswas.telp,email,siswas.status_id,statuses.status, siswas.deleted_at from siswas
        INNER join jurusans on jurusans.id = siswas.jurusan_id
        INNER join users on users.id = siswas.user_id
        INNER JOIN rayons on rayons.id = siswas.rayon_id
        INNER JOIN statuses on statuses.id = siswas.status_id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement( 'DROP VIEW datasiswa');
    }
}
