<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mahasiswa', function(Blueprint $table){
            $table->string('nim', 15);
            $table->primary('nim');
            $table->string('nama')->nullable();
            $table->string('kode_prodi');
            $table->foreign('kode_prodi')->references('kode_prodi')->on('prodi');
            $table->string('jenis_kelamin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('mahasiswa');
    }
}
