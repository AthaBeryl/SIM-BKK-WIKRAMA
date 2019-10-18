<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
    	$rayon = ['CISARUA','CICURUG','SUKASARI','WIKRAMA','TAJUR'];
    	for($r=0;$r<=4;$r++){
    	for($i=1;$i<=5;$i++){
        db::table('rayons')->insert([
        'rayon'=>$rayon[$r].' '.$i,
        'pembimbing'=>$faker->name,
        ]);
    	}
        }    
    }
}
