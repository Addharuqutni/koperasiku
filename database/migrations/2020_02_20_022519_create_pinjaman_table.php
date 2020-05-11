<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->uuid('id_pinjaman', 11);
            $table->string('id_anggota',111);
            $table->string('j_pinjaman');
            $table->string('provisi');
            $table->string('nominal');
            $table->timestamps();
            $table->primary('id_pinjaman');
            $table->foreign('id_anggota')
              ->references('id_anggota')->on('anggota')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjaman');
    }
}
