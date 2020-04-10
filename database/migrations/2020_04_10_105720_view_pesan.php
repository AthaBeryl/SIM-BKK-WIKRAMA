<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewPesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE view detailpesan as
              SELECT users.id,siswas.nis, users.name, pesans.pesan, pesans.status, pesans.updated_at
          	  FROM users
              INNER JOIN siswas on siswas.user_id = users.id
              INNER JOIN pesans on pesans.user_id = users.id
');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement( 'DROP VIEW detailpesan');
    }
}
