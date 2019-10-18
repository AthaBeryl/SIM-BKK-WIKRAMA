<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    	for($i = 1; $i <= 2; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('products')->insert([
    			'name' => $faker->word,
    			'detail' => $faker->text,
    		]);

    	}
    }
}
