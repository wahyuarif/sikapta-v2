<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyaratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('syarat', function(Blueprint $table){
            $table->increments('id');
            $table->string('nim',15);
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('transkrip_nilai');
            $table->string('slip_bayar');
            $table->string('surat_ijin_survey');
            $table->boolean('si_acc')->default(0);
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
        Schema::drop('syarat');
    }
}
