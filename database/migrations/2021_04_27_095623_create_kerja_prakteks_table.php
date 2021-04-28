<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKerjaPrakteksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerja_praktek', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_kp');
            $table->string('nama_instansi');
            $table->text('deskripsi');
            $table->string('bidang_pekerjaan');
            $table->integer('jml_pegawai');
            $table->string('kompleksitas_pekerjaan');
            $table->string('no_telp');
            $table->string('kerangka_pikir');
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
        Schema::drop('kerja_praktek');
    }
}
