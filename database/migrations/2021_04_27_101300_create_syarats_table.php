<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyaratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('krs');
            $table->string('slip_pembayaran');
            $table->string('surat_ijin_survey');
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
        Schema::drop('syarat');
    }
}
