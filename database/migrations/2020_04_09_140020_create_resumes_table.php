<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE view Resume as
        SELECT siswas.user_id as user_id,users.name as nama_siswa,status_details.nis,jurusans.jurusan,rayons.rayon,siswas.alamat as alamat_siswa,siswas.telp,email,siswas.masuk,siswas.lulus,siswas.jk,jabatan,instansis.nama,instansis.alamat,instansis.kota,durasi_kontrak,pendapatan,statuses.status,status_details.created_at,status_details.updated_at,users.foto FROM status_details
              INNER JOIN siswas on siswas.nis = status_details.nis
              LEFT JOIN instansis on instansis.id = status_details.id_instansi
              INNER JOIN statuses on statuses.id = status_details.status_id
              INNER JOIN jurusans on jurusans.id = siswas.jurusan_id
              INNER JOIN users on siswas.user_id = users.id
              INNER JOIN rayons on siswas.rayon_id = rayons.id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement( 'DROP VIEW resume');
    }
}
