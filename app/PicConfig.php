<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PicConfig extends Model
{
    protected $fillable = [
    	'judul','isi','foto','active','author_id'
    ];
}
