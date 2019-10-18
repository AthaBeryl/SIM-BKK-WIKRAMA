<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Alumni extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create('id_ID');
         
    	for($i = 1; $i <= 350; $i++){
    	$gender = $faker->randomElement(['male', 'female']);
    	$thn = $faker->randomElement(['2013','2014','2015','2016','2017']);
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('siswas')->insert([
    			'nisn' => '19812'. 100+$i,
    			'nis' => '1170'. 1200+$i,
    			'nama'=> $faker->name($gender),
    			'jurusan'=> $faker->randomElement(['RPL','TKJ','OTKP','TBG','MMD','HTL','BDP']),
    			'rayon'=> $faker->randomElement(['CISARUA','CICURUG','SUKASARI','WIKRAMA','TAJUR']).' '.$faker->numberBetween($min = 1, $max = 5) ,
    			'jk'=> $gender,
    			'masuk'=> $thn,
    			'lulus'=> $thn+3,
    			'alamat'=> $faker->streetAddress,
    			'email'=> $faker->freeEmail,
    			'telp'=> $faker->phoneNumber,
    			'status'=> $faker->randomElement(['kerja','kuliah','wirausaha','Belum Input']),
    		]);
    	}
    }
}
