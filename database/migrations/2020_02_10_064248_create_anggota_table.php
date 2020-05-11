<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function ($table) {
            $table->uuid('id_anggota', 11);
            $table->string('nama');
            $table->string('alamat');
            $table->string('j_kelamin');
            $table->string('no_telp', 13);
            $table->string('no_ktp', 17);
            $table->string('no_rek');
            $table->date('tgl_masuk');
            $table->timestamps();
            $table->primary('id_anggota');
            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
