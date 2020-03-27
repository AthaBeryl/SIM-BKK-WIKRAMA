<?php

use Illuminate\Database\Seeder;

class Preset extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('presets')->insert(['name'=>'Blue Ocean','iconActive'=>'#5867dd','bodyBackround'=>'#e6e9ed','headerKiri'=>'#1958d6','buttonClass'=>' btn-primary','status'=>'disable']);
        db::table('Presets')->insert(['name'=>'Fire Red','iconActive'=>'#c91a1a','bodyBackround'=>'#f4c3c3','headerKiri'=>'#dd1f1f','buttonClass'=>'btn-danger','status'=>'disable']);
        db::table('Presets')->insert(['name'=>'Precious Leaf','iconActive'=>'#27d838','bodyBackround'=>'#b7f7bb','headerKiri'=>'#25c447','buttonClass'=>'btn-success','status'=>'disable']);
        db::table('Presets')->insert(['name'=>'Sun Light','iconActive'=>'#ffaa00','bodyBackround'=>'#f3fcae','headerKiri'=>'#ffe900','buttonClass'=>'btn-warning','status'=>'disable']);
        db::table('Presets')->insert(['name'=>'Wikrama','iconActive'=>'#ffaa00','bodyBackround'=>'#e6e9ed','headerKiri'=>'#cec631','buttonClass'=>'btn-outline-primary','status'=>'active']);
    }
}
