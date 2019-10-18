<?php

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$jurusan =['Rekayasa Perangkat Lunak','Teknik Komputer dan Jaringan','Multimedia','Otomatisasi dan Tata Kelola Perkantoran','Bisnis Daring dan Pemasaran','Tataboga','Perhotelan'];
    	$short =['RPL','TKJ','MMD','OTKP','BDP','TBG','HTL'];
        for($i=0;$i<=6;$i++){
        db::table('jurusans')->insert([
        'jurusan'=>$jurusan[$i],
        'short'=>$short[$i],
        ]);
    	}
    }
}
