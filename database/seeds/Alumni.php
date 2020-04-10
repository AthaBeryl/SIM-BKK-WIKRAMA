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
    	$gender = $faker->randomElement(['Laki-laki', 'Perempuan']);
    	$thn = $faker->randomElement(['2013','2014','2015','2016','2017']);
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('siswas')->insert([
                'user_id'=> $i+1,
    			'nisn' => '19812'. (100+$i),
    			'nis' => '1170'. (6000+$i),
    			// 'nama'=> $faker->name($gender),
    			'jurusan_id'=> $faker->numberBetween($min = 1,$max = 7),
    			'rayon_id'=> $faker->numberBetween($min = 1,$max = 25),
    			'jk'=> $gender,
    			'masuk'=> $thn,
    			'lulus'=> ($thn+3),
    			'alamat'=> $faker->streetAddress,
    			// 'email'=> $faker->freeEmail,
    			'telp'=> $faker->phoneNumber,
    			'status_id'=> $faker->randomElement(['1','2','3','4']),
    		]);
    	}
    }
}
