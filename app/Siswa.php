<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
	use SoftDeletes;
    protected $fillable = [
        'user_id','nisn', 'nis','nama','jurusan_id','rayon_id','jk','masuk','lulus','alamat','telp','status_id'
    ];
    protected $dates = ['deleted_at'];
}
