<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimpananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpanan', function (Blueprint $table) {
            $table->uuid('id_simpanan', 11);
            $table->string('id_anggota', 11);
            $table->string('j_simpanan');
            $table->string('nominal');
            $table->timestamps();
            $table->primary('id_simpanan');
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
        Schema::dropIfExists('simpanan');
    }
}
