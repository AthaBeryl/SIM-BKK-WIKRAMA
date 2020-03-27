<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preset extends Model
{
    protected $table='presets';
    protected $fillable = [
    	'status','headerKiri','bodyBackround','iconActive'
    ];
}
