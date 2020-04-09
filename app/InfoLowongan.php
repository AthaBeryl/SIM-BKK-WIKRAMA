<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoLowongan extends Model
{
    protected $fillable = [
    	'judul','isi','foto','active'
    ];
}
