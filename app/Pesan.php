<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = [
    	'user_id','pesan','status'
    ];
}
