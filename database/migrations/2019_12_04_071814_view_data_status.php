<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewDataStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement( 'CREATE VIEW dataStatus AS
        SELECT siswas.user_id as user_id,status_details.nis,jurusans.jurusan,siswas.masuk,siswas.lulus,siswas.jk,jabatan,instansis.nama,instansis.alamat,instansis.kota,durasi_kontrak,pendapatan,statuses.status,status_details.created_at,status_details.updated_at FROM status_details
        INNER JOIN siswas on siswas.nis = status_details.nis
        LEFT JOIN instansis on instansis.id = status_details.id_instansi
        INNER JOIN statuses on statuses.id = status_details.status_id
        INNER JOIN jurusans on jurusans.id = siswas.jurusan_id
        ' );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement( 'DROP VIEW dataStatus');
    }
}
