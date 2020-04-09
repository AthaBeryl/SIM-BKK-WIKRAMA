<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statusDetail extends Model
{
    protected $table = 'status_details';
    protected $fillable = [
        'nis', 'status_id','id_instansi','jabatan','pendapatan','durasi_kontrak'
    ];
}
