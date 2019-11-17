<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nisn', 'nis','nama','jurusan','rayon','jk','masuk','lulus','alamat','telp','status'
    ];
}
