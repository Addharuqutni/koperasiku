<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'pinjaman';
    protected $fillable = ['id_pinjaman','id_anggota','j_pinjaman','provisi','nominal'];

}
