<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status =['Kerja','Kuliah','Wirausaha','Belum Memilih'];
        for($i=0;$i<=3;$i++){
        db::table('statuses')->insert([
        'status'=>$status[$i],
        ]);
    	}
    }
}
