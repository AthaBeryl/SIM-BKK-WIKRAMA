<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StatusDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
        for($i=1;$i<=350;$i++){
        db::table('status_details')->insert([
        'alamatInstansi'=>$faker->streetAddress, 
        'nis'=> '1170'. 1200+$i,
        'namaInstansi'=>$faker->company,
        'jabatan'=>$faker->randomElement(['Karyawan','Boss','Mahasiswa','Sekretaris','CEO','Manager','Project Manager','Data Analist','Direktur','Tester','IT Security']),                
        ]);
    	}
    }
}
