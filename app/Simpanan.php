<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{

    protected $table = 'simpanan';
    protected $fillable = ['id_simpanan','id_anggota','j_simpanan','nominal'];

}
