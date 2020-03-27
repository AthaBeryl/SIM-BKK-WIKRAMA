<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Instansi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        db::table('instansis')->insert([
            'alamat'=>null,
            'nama'=> null,
            'kota'=>null,
            ]);
        for($i=1;$i<=100;$i++){
            db::table('instansis')->insert([
            'alamat'=>$faker->streetAddress,
            'nama'=> $faker->company(),
            'kota'=>$faker->randomElement(['Bandung','Bogor','Jakarta','Surabaya','Depok','Tanggerang','Bekasi'])
            ]);
            }

    }
}
