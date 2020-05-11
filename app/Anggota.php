<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = ['id_anggota','nama','alamat','j_kelamin','no_telp','no_ktp','no_rek','tgl_masuk'];

}
