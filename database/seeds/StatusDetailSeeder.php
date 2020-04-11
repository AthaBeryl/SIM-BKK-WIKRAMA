<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use carbon\carbon;
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
        $statusId = $faker->numberBetween($min = 1 , $max = 3);
        if($statusId != 2){
            $jabatan =  $faker->randomElement(['Karyawan','Boss','Pegawai Negri','Sekretaris','CEO','Manager','Project Manager','Data Analist','Direktur','Tester','IT Security']);
            $kontrak = $faker->randomElement(['1','2','3','4','5','6','7','8','9']);
        }else{
            $jabatan =  $faker->randomElement(['DKV','Teknik Elektro','Teknik Informatika','Psikologi','Sastra Inggris','Ilmu Komputer','Sistem Informasi','Matematika Murni','Matematika Terapan']);
            $kontrak = $faker->randomElement(['Sarjana','Diploma','Magister','Doktor','Bachelor','Master']);
        }
        
        db::table('status_details')->insert([
        'nis'=> '1170'. (6000+$i),
        'id_instansi'=>$faker->numberBetween($min = 1 , $max = 100),
        'jabatan'=>$jabatan,
        'Pendapatan'=>$faker->randomElement(['500000','300000','1000000','2000000','3000000','4500000','7770000','10000000','30000000','5000000','900000']),
        'durasi_kontrak'=>$kontrak,
        'status_id'=>$faker->numberBetween($min = 1 , $max = 3),
        'created_at'=> carbon::now(),
        'updated_at'=> carbon::now(),
        ]);
    	}
    }
}
