<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoSekolah extends Model
{
    protected $fillable = [
    	'judul','isi','foto','active'
    ];
}
